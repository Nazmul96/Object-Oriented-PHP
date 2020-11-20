<?php
    abstract class Father
    {
        function display()
        {
            echo "alhamdulilallah<br>";
        }
        abstract function display1();
        
    }
    class Son extends Father{
        public function display1()
        {
            echo "allah onk valo rakhcen";
        }
    }
    $obj=new Son();
    $obj->display();
    $obj->display1();

?>