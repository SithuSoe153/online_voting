<?php

namespace App\Controllers;

use App\Models\UserModel;


class Users extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);

        return view('login', $data);
    }



    public function register()
    {
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'firstname' => 'required|min_length[3]|max_length[255]',
                'lastname' => 'required|min_length[3]|max_length[255]',
                'email' => 'required|min_length[6]|max_length[255]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[6]|max_length[255]',
                'password_conform' => [
                    'rules' => 'matches[password]',
                    'label' => 'Confirm Password',
                ],

            ];

            // if the form is not validate
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                // Store the user data inside the database

                $model = new UserModel();

                $newData = [
                    'firstname' => $this->request->getVar('firstname'),
                    'lastname' => $this->request->getVar('lastname'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),

                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registeration');
                return redirect()->to('login');
            }
        }
        return view('register', $data);
    }
}
