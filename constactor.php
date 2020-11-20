<?php
    class nazmul{
        
        function __construct(){
            
            echo "default constactor <br>";
        }
        function __destruct()
        {
            echo "object destroyed";
        }
    }
    $shoron=new nazmul();

?>