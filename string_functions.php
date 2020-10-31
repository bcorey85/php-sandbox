<?php
    // substr()
    // Returns a portion of a string

    // Can do negative value from end
    $output = substr('Hello', 0, -2);
    echo $output;

    // strlen()
    // Returns the length of a string
    echo '<br>';
    $output = strlen('Hello');
    echo $output;

    // strpos()
    // Finds the position o the first occurrence of a sub string
    echo '<br>';
    $output = strpos('Hello', 'o');
    echo $output;

    // strrpos()
    // Finds the position o the last occurrence of a sub string
    echo '<br>';
    $output = strrpos('Hello World', 'o');
    echo $output;

    // trim()
    // strips whitespace
    echo '<br>';
    $output = trim(' Hello World ');
    echo $output;

    // strtoupper()
    // uppercase everything
    echo '<br>';
    $output = strtoupper(' Hello World ');
    echo $output;

    // strtolower()
    // lowercase everything
    echo '<br>';
    $output = strtolower(' Hello World ');
    echo $output;
  
    // ucwords()
    // uppercase each word
    echo '<br>';
    $output = ucwords(' hello world ');
    echo $output;

    // str_replace()
    // replace all occurrences of a search string
    echo '<br>';
    $text = 'Hello World';
    $output = str_replace('World', 'Everyone', $text);
    echo $output;

    // is_string()
    // check if string, outputs nothing if not string, 1 if string
    echo '<br>';
    $val = '22';
    $output = is_string($val);
    echo $output;

    $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
    foreach($values as $value) {
        if (is_string($value)) {
            echo "{$value} is a string <br>";
        }
    }

    echo '<br>';
    // gzcompress()
    // compress a string
    $string = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

    $compressed = gzcompress($string);
    echo $compressed;

    echo '<br>';
    $original = gzuncompress($compressed);
    echo $original;

?>