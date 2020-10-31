<?php
    echo date('d'); // Day
    echo date('m'); // Month
    echo date('y'); // Year y = 2 digit
    echo date('Y'); // Year Y = 4 digit
    echo date('l'); // Day of week
    echo '<br>';

    echo date('Y/m/d');

    echo '<br>';
    echo date('h'); // hour
    echo date('i'); // min
    echo date('s'); // sec
    echo date('a'); // am or pm

    echo '<br>';
    date_default_timezone_set('America/Chicago');
    echo date('h:i:sa');

    echo '<br>';
    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    echo $timestamp;

    echo '<br>';
    echo date('m/d/Y', $timestamp);

    
    echo '<br>';
    $timestamp2 = strtotime('7:00pm march 22 2016');
    $timestamp3 = strtotime('+2 Months');
    $timestamp4 = strtotime('next Sunday');
    echo date('m/d/Y', $timestamp2);
    echo date('m/d/Y', $timestamp3);
    echo date('m/d/Y', $timestamp4);
?>