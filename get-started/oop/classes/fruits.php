<?php
//    example1

class fruits {
    public $name;
    public $color;

    function __construct( $name, $color ) {
        echo  $this->name = $name . ' ' . 'is ' . $this->color = $color;
    }
}

?>