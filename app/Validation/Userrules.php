<?php

namespace App\Validation;

use PhpParser\Node\Expr\Cast\String_;
use App\Models\Users;

class Userrules
{
    // public function custom_rule(): bool
    // {
    //     return true;
    // }
    public function validateUser(String $str, String $field, array $data)
    {
        $model = new Users();
        $user = $model->where('username', $data['username'])->first();

        if (!$user) {
            return false;
        }

        return password_verify($data['password'], $user['password']);
    }
}
