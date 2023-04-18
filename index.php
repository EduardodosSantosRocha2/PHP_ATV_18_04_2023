<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>My first PHP page</h1>

<?php
    //print-
    
    $x = 5;
    $y = 3;
    // echo "Hello world!\n";
    // echo $x + $y;


   // echo $y;

    function myTest(){
        // global $x,$y;
        // $y = $x + $y;
        //$GLOBALS ['y'] = $GLOBALS['x']+$GLOBALS['y'];

        static $x =0;
        echo $x;
        $x++;

    }
    myTest();
    echo "<p> </p>";
   // echo "<p> $y </p>"
    myTest();
    echo "<p> </p>";
    myTest();
    echo "<p> </p>";
    var_dump($x);
    
    echo "<p>array </p>";
    $cars = array('volvo', 123, 10.2);
    var_dump($cars);


    class car{
        public $color;
        public $model;

        public function __construct($color,$model)
        {
            $this->color = $color;
            $this->model = $model;

        }

        public function message(){
            return "My car is a".$this->color." ".$this->model."!";
        }
    }

    echo "<br>";
    $myCar = new Car("black", "Volvo");
    echo $myCar->message();
    echo "<br>";
    $myCar = new Car("red", "Toyota");
    echo $myCar->message();
   


?>



</body>
</html>