<?php
    #Arrays
    /* 
        - Indexed
        - Associative
        - Multi-dimensional
    */

    // Indexed
    $people = array('Name1', 'Name2', 'Name3');
    $ids = array(1,2,3,4);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';

    echo $people[0];    
    echo $ids[0];
    echo $cars[1];
    echo $cars[3];
    echo $cars[4];

    # Count items in array
    echo count($cars);

    # Print all items in array
    print_r($cars);

    # Debug variable
    var_dump($cars);

    // Associative Arrays (Objects in JS)
    $people = array('Tom' => 35, 'Jose' => 32, 'William' => 37);
    echo $people['Tom'];

    $ids = [22 => 'Brad', 41 => 'Tim', 24 => 'Jim'];
    echo $ids[22];

    $people['Jill'] = 42;
    echo $people['Jill'];

    // Multi-dimensional
    $cars = array(array('Honda', 20, 10), array('Ford', 15, 5), array('Toyota', 32, 12));
    echo $cars[0][1];
?>