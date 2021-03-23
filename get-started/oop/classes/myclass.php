    <?php

    class myclass
    {
        public $x, $y, $z;
        private $var;
        protected $var1;
        public function __construct()
        {
            $this->var = "This is private property";
            $this->var1 = True;
            $this->x = 20;
            $this->y = 25;
            $this->z = 30;
        }
        public function iterate()
        {
            foreach ($this as $key => $value) {
                echo "$key=>$value<br>";
            }
        }
    }



    ?>
