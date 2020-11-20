<?php
    //multi level inheritance
    class Father{        //parent class
        public $x;    
        public $y;
        function getvalue($a,$b)
        {
            $this->x=$a;
            $this->y=$b;

        }
    }
    class Son extends Father{          //child class
        public $c=30;
        public $sum;
        function add(){
            $this->sum=$this->x + $this->y;
            return $this->sum;
        }
    }
    class Grandson extends Son{    //grand_child class
        function display()
        {
            echo "value of A: $this->x <br>";
            echo "value of B: $this->y <br>";
            echo "value of A: $this->c <br>";
            echo "value of sum: ".$this->add()."<br>";
        }
    }
    $obj1=new Grandson;
    $obj1->getvalue(10,20);
    $obj1->display();


?>