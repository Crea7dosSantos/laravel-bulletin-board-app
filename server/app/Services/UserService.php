<?php

namespace App\Services;

use App\Models\User as ModelUser;
use Illuminate\Support\Facades\Auth;


class UserService
{

    public function getUserName($user_id)
    {
        \Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');
        $user = ModelUser::findOrFail($user_id);
        $name = $user->name;
        return $name;
    }
}
