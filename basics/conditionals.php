<?php
    # Conditionals

    /*
        == 
        ===
        <
        >
        <=
        >=
        !=
        !==
    */

    $num = 5;

    if ($num == 5) {
        echo '5 passed';
    }

    $num = '5';

    if ($num === 5) {
        echo '5 passed';
    } else if($num === '5') {
        echo 'string 5 passed';
    }

    # Logical
    /* 
        and && -> both true
        or || -> one true or both true
        xor -> one true, but not both
    */

    $num = 6;
    if ($num > 5 XOR $num < 10) {
        echo "$num passed";
    } else {
        echo "$num failed";
    }

    # Switches
    $favColor = 'green';

    switch($favColor) {
        case 'red':
            echo 'Fav is red';
            break;
        case 'blue':
            echo 'Fav is blue';
            break;
        default: 
            echo 'Something else';
    }

?>