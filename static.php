<?php
    class Father{
        public static $a=10;
        public static function display()
        {
            echo self::$a;
        }

    }
    Father::display();
?>