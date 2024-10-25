<?php

namespace App\Enum;

use Illuminate\Support\Str;
use ValueError;

enum RolesEnum: int
{
    case Admin = 1;
    case Common = 2;

    public static function fromName($name): string
    {
        foreach (self::cases() as $role) {
            if (Str::upper($name) === Str::upper($role->name)) {
                return $role->value;
            }
        }

        throw new ValueError("{$name} is not a valid role" . self::class);
    }
}
