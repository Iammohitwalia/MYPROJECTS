<?php
// inheritance

class student {
    public $a;
    public $b;

    function getvalue( $x, $y ) {
        $this->a = $x;
        $this->b = $y;
    }
}
// create father class inheritance
// all the prolerty and method of father can b accessible in chlid class

class newstudent extends student {
    function display() {
        echo 'value of a:'.$this->a.'<br>';
        //access the property of father

        echo 'value of b:'.$this->b.'<br>';
    }
}

