<?php
class demo{

    public $hello = 'Hello World';

    function hello(){
        echo $this->hello;
    }
}

$demo = new demo;
$demo -> hello();
?><br>


<?php
class demo1{

    public $name = 'sam';

}
$demo = new demo1;
echo $demo->name;
$demo->name = 'john';
echo $demo->name;
?>