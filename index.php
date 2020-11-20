<?php
    class Mobile
    {
        var $model;
        function show_model()
        {
            

            echo "mobile number is: $this->model <br>";
        }
    }
    $samsung=new Mobile;
    $samsung->model="A8";
    $samsung->show_model();
    $vivo=new Mobile;
    $vivo->model="V9";
    $vivo->show_model();
?>