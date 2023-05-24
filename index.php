<?php

require_once __DIR__ . '/app/controllers/UserController.php';

use app\Co\UserController;

define('BASE_PATH', 'PHPCOURSE/DARREBENI/family_task');

$route = $_SERVER['REQUEST_URI'];

switch ($route) {
    case BASE_PATH:
        $user = new UserController();
        $user->index();
}