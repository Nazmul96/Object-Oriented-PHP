<?php
    interface Father{
        const mark=101; //properti always const at interface
        public function display();
        public function display1();
    }
    interface Mother{
        const mark1=102;
    }
    class Son implements Father,Mother{
        public function display(){
            echo father::mark."<br>";
            echo mother::mark1;
        }
        public function display1(){}

    }
    $obj=new Son();
    $obj->display();


?>