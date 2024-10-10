<?php

namespace Maxrodrigues\Usermanagement\Controller;

use Faker\Factory;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Maxrodrigues\Usermanagement\Models\User;
use Psr\Http\Message\{ResponseInterface, ServerRequestInterface};

class UsersController
{
    public function index(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        if(! Capsule::schema()->hasTable('users')) {
            Capsule::schema()->create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('email')->unique();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            });
        }

        $users = Capsule::table('users')->get();

        $response->getBody()->write($users->toJson());
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function store(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $data = json_decode($request->getBody()->getContents(), true);
        Capsule::table('users')->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_BCRYPT)
        ]);

        $user = Capsule::table('users')->where('email', $data['email'])->first();
        $response->getBody()->write(json_encode($user));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function update(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $data = json_decode($request->getBody()->getContents(), true);
        $user = Capsule::table('users')
            ->where('id', $args['id'])
            ->update($data);

        if (! $user) {
            $response->getBody()->write('Não rolou');
            $response->withHeader('Content-Type', 'application/json')
                ->withStatus(400);
        }

        return $response->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }

    public function destroy(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $deleteUser = Capsule::table('users')->where('id', $args['id'])->delete();
        if (! $deleteUser) {
            return $response->withHeader('Content-Type', 'application/json')
                ->withStatus(400);
        }
        return $response->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}
