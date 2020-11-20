<?php
    interface Father{
        const mark=101; //properti always const at interface
        public function display();
        public function display1();
    }
    class Son implements Father{
        public function display(){
            echo father::mark;
        }
        public function display1(){}

    }
    $obj=new Son();
    $obj->display();


?>