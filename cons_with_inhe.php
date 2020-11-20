<?php

    class father{
         public $a;
        function __construct($x){
            echo "parent constructor called ";
            $this->a=$x;
            echo "$this->a";
        }
    }
    class Son extends Father{
        public $b;
        function __construct($x,$y){
            parent::__construct($x);
            echo "<br>Child constructor called ";
            $this->b=$y;
            echo "$this->b";
        }
        
    }
    $obj =new Son(10,20);

?>