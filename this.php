<?php
    class Father{
        public $roll;
        function display()
        {
             
             echo $roll;
        }
    }

    $obj=new Father();
    $obj->roll=10;
    $obj->display();

?>