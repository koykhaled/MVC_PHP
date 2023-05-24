<?php

namespace app\Co;

use app\Mo\User;

require_once __DIR__ . '/../models/User.php';



class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        $users = $this->userModel->getAllUsers();
        require __DIR__ . '/../../views/user/index.php';
    }
}