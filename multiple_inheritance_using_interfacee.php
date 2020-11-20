<?php
    class Father{
        public $mark=101; //properti always const at interface
        
    }
    class Father1 extends Father{
        public $mark1=102;
    }
    interface Mother{
        const mark2=103;
        public function display();
        public function display1();
    }
    interface Mother1{
        const mark3=104;
        
    }
    class Son extends Father1 implements Mother,Mother1{
        public function display(){
            echo $this->mark."<br>";
            echo $this->mark1."<br>";
            echo mother::mark2."<br>";
            echo mother1::mark3;
        }
        public function display1(){}

    }
    $obj=new Son();
    $obj->display();


?>