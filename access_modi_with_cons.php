<?php
    class Father{
        public $a;
        protected function __construct($x){
            $this->a=$x;
            echo "parent consturctor $this->a <br>";
        }
    }
    class Son extends Father{
        public $b;
        public function __construct($x,$y){
            parent::__construct($x);
            $this->b=$y;
            echo "child constuctor $this->b";
        } 

    }
    $obj = new Son(10,20);


?>