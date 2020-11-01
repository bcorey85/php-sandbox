<?php
    $people[] = 'Steve';
    $people[] = 'John';
    $people[] = 'Kathy';
    $people[] = 'Bob';
    $people[] = 'Tim';
    $people[] = 'Chris';
    $people[] = 'Jad';
    $people[] = 'Bill';
    $people[] = 'Gus';
    $people[] = 'Brian';

    // Get query string
    $q = $_REQUEST['q'];

    $suggestion = '';

    //get suggestions

    if($q !== '') {
        $q = strtolower($q);
        $length = strlen($q);

        foreach($people as $person) {
            // Search in query string 'q'
            // Check current person iteration from 0 index to length of query string
            // if true, place first match as suggestion, or else append to suggestion if another match found
            if (stristr($q, substr($person, 0, $length))) {
                if ($suggestion === '') {
                    $suggestion = $person;
                } else {
                    $suggestion .= ", $person";
                }
            }
        }
    }

    echo $suggestion === '' ? "No Suggestion" : $suggestion;
?>