<?php
// /example1

class students {
    public const ID = 1;
    public $name = 'sumit';
    public static $age = 21;

    public function user() {
        echo self::ID . '<br>';
        echo $this->name . '<br>';
        echo static::$age;
    }
}

class school {
    private const TOTAL = 300;
    private static $school_name = 'Model high school';
    private $teachers = 20;
    public  function myschool() {
        echo self::TOTAL . '<br>';
        echo self::$school_name . '<br>';
        echo $this->teachers . '<br>';
    }
}