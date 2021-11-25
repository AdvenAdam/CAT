<?php

namespace App\Database\Seeds;

use App\Models\Users;
use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $user_object = new Users();

        $user_object->insertBatch([
            [
                "username" => "admin",
                "password" => password_hash("12345678", PASSWORD_DEFAULT),
                "role"     => "admin",
                "active"   => 1,
                "gambar"   => "default.jpg"
            ],
            [
                "username" => "guru",
                "password" => password_hash("12345678", PASSWORD_DEFAULT),
                "role"     => "guru",
                "active"   => 1,
                "gambar"   => "default.jpg"
            ],
            [
                "username" => "siswa",
                "password" => password_hash("12345678", PASSWORD_DEFAULT),
                "role"     => "siswa",
                "active"   => 1,
                "gambar"   => "default.jpg"
            ],

        ]);
    }
}
