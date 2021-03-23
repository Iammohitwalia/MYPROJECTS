<?php

class scope
{
    public const NAME = 'Resolution';
    public static $type = 'operator';
    public static function showdata()
    {
        echo "The name is" . ' ' . self::NAME . " " . 'and it is' . ' ' . static::$type . "<br>";
    }
}



?>