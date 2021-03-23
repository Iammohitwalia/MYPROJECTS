<?php

interface myInterface
{
    public function getname($fname, $lname);
    public static function getemail($email);
}
class user implements myInterface
{
    public $fname;
    public $lname;
    public static $email;
    function getname($fname, $lname)
    {
        echo $this->fname = $fname . $this->lname = $lname . '<br>';
    }
    static  function getemail($email)
    {
        echo "The email adress is " . self::$email = $email;
    }
}

