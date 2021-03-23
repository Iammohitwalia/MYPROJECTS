<?php

// non static

class demo {
    public $location = 'india';

    public function getLocation() {
        return $this->location;
    }
}

// static

class home {
    public static $room = 10;
    public static function getRooms() {
        // return static::$room;
        return self::$room;
    }
}
$room = new home();
echo 'There are' . $room::getRooms() . 'rooms in my house';
echo '<br>';

