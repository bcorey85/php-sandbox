<?php
    # Functions

    function simpleFunction() {
        echo 'Hello';
    }

    simpleFunction();

    function sayHello($name = 'World') {
        echo "Hello $name";
        echo '<br>';
    }

    sayHello('Joe');
    sayHello();

    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

    echo addNumbers(5, 10);

    // By reference

    $myNum = 10;

    function addFive($num) {
        $num += 5;
    }

    function addTen(&$num) {
        $num += 10;
    }

    addFive($myNum);
    echo "Value: $myNum<br>";

    addTen($myNum);
    echo "Value: $myNum<br>";

?>

