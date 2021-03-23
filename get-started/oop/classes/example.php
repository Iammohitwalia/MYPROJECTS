<?php
abstract class example {
    public function demo() {
        echo 'we create normal method with in the abstract class<br>';
    }

    abstract function myname();
}

class newexample extends example {

    public function myname() {
        echo 'abstract class<br>';
    }
}

?>