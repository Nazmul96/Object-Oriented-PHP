<?php
    class Father{
        public static $a=30;

    }
    class Son extends Father{
        function display()
        {
            echo self::$a;
        }
        
    }
    $obj=new Son();
    //$obj->display();
    Son::display();

?>