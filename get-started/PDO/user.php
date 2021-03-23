<?php
require 'mydatabase.php';

class user {
    protected $Name;
    protected $email;
    protected $Role;

    public function getName() {
        echo $this->Name;
    }

    public function getEmail() {
        echo $this->email;
    }

    public function getRole() {
        echo $this->Role;
    }
}