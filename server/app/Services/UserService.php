<?php

namespace App\Services;

use App\Models\User as ModelUser;
use Illuminate\Support\Facades\Auth;


class UserService
{

    public function getUserName($user_id)
    {
        $user = ModelUser::findOrFail($user_id);
        $name = $user->name;
        return $name;
    }
}
