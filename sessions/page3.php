<?php 
    session_start();
    print_r( $_SESSION);
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <h1>Hello <?php echo $name; ?> <?php echo $email; ?></h1>
</body>
</html>