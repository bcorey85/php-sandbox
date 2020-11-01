<?php 
    session_start();

    $_SESSION['name'] = 'Bob';

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <h1>Thank you <?php echo $name; ?>, You have subscribed with email <?php echo $email; ?>.</h1>
    <a href="page3.php">Go to page3</a>
</body>
</html>