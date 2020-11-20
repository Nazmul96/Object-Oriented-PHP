<?php
    class Father{
        public static $name;
        public function display($num)
        {
            Father :: $name=$num;
            echo "happy ".Father :: $name;
        }
    }
    class Son{ 
        
        public static function display($num)
        {
            
            echo "<br>happy ".$num;
        }
    }
   
    $obj=new Father();
    $obj->display(20);

    Son::display(50);  

    //we don't need to create to method...we call  by this class name

?>