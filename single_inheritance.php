<?php
    //single inheritance
    class Father{        //parent class
        public $x;    
        public $y;
        function getvalue($a,$b)
        {
            $this->x=$a;
            $this->y=$b;

        }
    }
    class Son extends Father{       //child class 
        function display(){
            echo "value of A: $this->x <br>";
            echo "value of A: $this->y <br>";
        }

    }
    $obj=new Son;
    $obj->getvalue(50,20);
    $obj->display();



?>