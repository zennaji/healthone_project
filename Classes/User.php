<?php


class User
{
    public $id;
    public $name;
    public $email;
    public $password;
 

    public function __construct()
    {
        settype($this->id, 'integer');

    }
}