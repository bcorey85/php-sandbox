
<?php
    #Variables
    /* 
        - Prefix with $
        - Start with a letter or an underscore
        - Only letters, numbers, or underscores
        - Case sensitive
    */

    #Data Types
    /* 
        String - single or double quotes
        Integers
        Floats
        Booleans
        Arrays
        Objects
        Null
        Resource 
    */
    $output = 'Hello World';
    $num1 = 4;
    $num2 = 10;
    $sum =  $num1 + $num2;
    $float1 = 4.4;
    $bool1 = true;

    $string1 = 'Hello';
    $string2 = 'World';
    $string3 = 'They\'re Here';
    # Concatenation
    $greeting = $string1 .' '. $string2.'!';
    $greeting2 = "$string1 $string2!";

    echo $greeting;
    echo $greeting2;
    echo $string3;
?>

<?php
    #Constants
    define('GREETING', 'Hello Everyone');
    echo GREETING
?>