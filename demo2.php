<?php
    class demo
    {
        public $a=10;
        public $b=10;
        function add()
        {
            echo $this->a;
            echo "<br>";
            echo $this->b;
        }
    }
    $obj=new demo;
    $obj->add();
?>