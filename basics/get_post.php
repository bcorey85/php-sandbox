<?php
    if(isset($_POST['name'])) {
        echo htmlentities($_POST['name']);
        echo htmlentities($_POST['email']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Post</title>
</head>
<body>
    <form method="POST" action='get_post.php'>
        <div>
            <label>Name</label><br>
            <input type='text' name='name'>
        </div>
        <div>
            <label>Email</label><br>
            <input type='text' name='email'>
        </div>
        <button type='submit'>Submit</button>
    </form>
</body>
</html>