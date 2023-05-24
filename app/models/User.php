<?php

namespace app\Mo;

use app\Mo\Model;

require_once __DIR__ .  '/Model.php';


class User extends Model
{
    private $user_name, $user_email, $user_type, $user_password;


    public function setName($user_name)
    {
        $this->user_name = $user_name;
    }

    public function setType($user_type)
    {
        $this->user_type = $user_type;
    }

    public function setEmail($user_email)
    {
        $this->user_email = $user_email;
    }

    public function setPassword($user_password)
    {
        $this->user_password = $user_password;
    }

    public function getName()
    {
        return $this->user_name;
    }
    public function getType()
    {
        return $this->user_type;
    }
    public function getEmail()
    {
        return $this->user_email;
    }
    public function getPassword()
    {
        return $this->user_password;
    }
    public function getAllUsers()
    {
        $results = $this->getAll('users');
        $users = array();
        foreach ($results as $result) {
            $user = new User();
            $user->setId($result['user_id']);
            $user->setName($result['user_name']);
            $user->setEmail($result['user_email']);
            $user->setType($result['user_type']);
            $user->setPassword($result['password']);
            $users[] = $user;
        }
        return $users;
    }
}