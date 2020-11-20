
<?php
    //Hierarchical inheritance
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
        
        public $sum;
        function add(){
            $this->sum=$this->x + $this->y;
            return $this->sum;
        }
        function display()
        {
            echo "value of A: $this->x <br>";
            echo "value of B: $this->y <br>";
            echo "value of sum: ".$this->add()."<br>";
        }
    }
    class Daughter extends Father{    //child class
        function multi(){
            $this->sum=$this->x * $this->y;
            return $this->sum;
        }
        function display()
        {
            echo "value of A: $this->x <br>";
            echo "value of B: $this->y <br>";
            echo "value of sum: ".$this->multi()."<br>";
        }
    }
    $obj1=new Son;
    //$obj1->getvalue(10,20);
    $obj1->display();
    $obj2=new Daughter;
    $obj2->getvalue(40,10);
    $obj2->display();
   


?>