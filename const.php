<?php
    class Father{
         const mark=35; //can not redeclare mark variable.
        
        public function display(){
            echo Father::mark;
        }
    }
    $obj=new Father();
    echo Father::mark;


?>