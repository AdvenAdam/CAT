<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use CodeIgniter\Validation\Rules;

class UserController extends BaseController
{

    public function login()
    {
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[username,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => "Username or Password didn't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {
                return view(
                    'login',
                    ["validation" => $this->validator]
                );
            } else {
                $model = new Users();

                $user = $model->where('username', $this->request->getVar('username'))
                    ->first();
                $this->setUserSession($user);
            }
        }
    }
    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'username' => $user['username'],
            'gambar' => $user['gambar'],
            'active' => $user['active'],
            'isLoggedIn' => true,
            'level' => $user['level'],
        ];

        session()->set($data);
        return true;
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
