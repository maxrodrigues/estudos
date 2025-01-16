<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('id', '>', 5)->get();
        return view('listar-usuarios', compact('users'));
    }
}
