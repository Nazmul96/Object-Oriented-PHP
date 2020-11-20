<?php
    class Father{
        function display($num)
        {
            echo " super class $num <br>";
        }

    }
    class Son extends Father{
            function display($num){
                echo "son class $num";
            }
    }
    $obj=new Son();
    $obj->display(35.5);
    $obj1=new Father();
    $obj1->display(30);
?>