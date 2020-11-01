<?php
    $path = '/dir0/dir1/myfile.php';
    $file = 'file1.txt';

    // Return filename
    echo basename($path);

    // Filename no ext
    echo '<br>';
    echo basename($path, '.php');

    // Echo dir name from path
    echo '<br>';
    echo dirname($path);

    // Check if file exists
    echo '<br>';
    echo file_exists($file);

    // Get absolute path
    echo '<br>';
    echo realpath($file);

    // Checks to see if file
    echo '<br>';
    echo is_file($file);

    // Check if writable
    echo '<br>';
    echo is_readable($file);

    // Get filesize
    echo '<br>';
    echo filesize($file);

    // Create a dir
    mkdir('testing');

    // Remove dir
    rmdir('testing');

    // Copy file
    echo copy('file1.txt', 'file2.txt');

    // Rename file
    rename('file2.txt', 'myfile.txt');

    // Delete file
    unlink('myfile.txt');

    // Write from file to string
    echo file_get_contents($file);

    // Write string to file (DESTRUCTIVE)
    // echo file_put_contents($file, 'Goodbye world');

    $current = file_get_contents($file);
    $current .= ' Goodbye World';

    file_put_contents($file, $current);

    // Open file for reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo '<br>';
    echo $data;

    // Open file for writing
    $handle = fopen('file2.txt', 'w');
    $txt = "John Doe\n";
    fwrite($handle, $txt);
    fwrite($handle, "Steve Smith\n");
    fclose($handle);
?>