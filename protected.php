<?php
//Can not access protected property or method outside class or object
//protected property or method  can be assign with in same class
//child class can access parent's or grandparent's protected property or method

    class Father{
        protected $a=30;
      
    }
    class Son extends Father{
        
        protected $b=40;
       
    }
    class Grandson extends Son{

        public function display(){

            echo "$this->a"."<br>"."$this->b";
        }
    }

    $obj=new Grandson();
    
    $obj->display();

?>