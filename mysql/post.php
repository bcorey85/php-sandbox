<?php
    require('config/config.php');
    require('config/db.php');    

    // get ID
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create query
    $query = 'SELECT * FROM posts WHERE id = ' .$id;

    // Get Result
    $result = mysqli_query($conn, $query);
   
    // Fetch Data
    $post = mysqli_fetch_assoc($result);

    // Free result memory
    mysqli_free_result($result);

    // Close connection
    mysqli_close($conn);
?>

<?php include('inc/header.php') ?>
    <div class='container'>
        <h1><?php echo $post['title']; ?></h1>
            <small>Created on <?php echo $post['created_at']; ?>
            <?php echo $post['author']; ?></small>
            <p><?php echo $post['body']; ?></p>   
      </div>
<?php include('inc/footer.php') ?>