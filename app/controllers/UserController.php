<?php

namespace app\Co;

use app\Mo\User;
use BaseController;

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/BaseController.php';


class UserController extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        $users = $this->userModel->getAllUsers();
        $this->render('../../views/user/index.php', compact('users'));
    }
}