<?php
    $user = ['name' => 'Brandon', 'email' => 'test@test.com', 'age' => 35];

    $user = serialize($user);
    setcookie('user', $user, time() + 86400);

    $user = unserialize($_COOKIE['user']);
    
    echo $user['name'];
    print_r($user);