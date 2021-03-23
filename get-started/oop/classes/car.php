<?php
/**
* trait trait_name {
    * add some code here
    * }
    * use traits in class
    * class class_name {
        * use trait_name
        * }
        */
        trait vehicle {

            public function get_parts( $engine, $color ) {
                return $this->engine = $engine . $this->color = $color;
            }
        }
        ;

        class car {
            use vehicle;
        }

        // example 2
        trait insert {
            function add( $value1, $value2 ) {
                return $value1 + $value2;
            }
        }
        trait send {
            function multiply( $value1, $value2 ) {
                return $value1 * $value2;
            }
        }

        class sum {
            use insert;
            use send;

            function caluclate( $value1, $value2 ) {
                echo 'result of addition is ' . $this->add( $value1, $value2 );
                echo 'result of multiplication  is ' . $this->multiply( $value1, $value2 );
            }
        }
        $abc = new sum();
        $abc->caluclate( 44, 23 );

