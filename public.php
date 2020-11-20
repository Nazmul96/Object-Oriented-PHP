<?php

     class Father
    {
        public $a;
        public function displayparent()
        {
            echo " i really love her $this->a";
        }
    }
    class Son extends Father
    {
        public function displaychild($x){
            $this->a=$x;
            echo "child class $this->a <br>";
            $this->displayparent();
        }
    }
    $obj=new Son();
    
    $obj->displaychild(10);

?>