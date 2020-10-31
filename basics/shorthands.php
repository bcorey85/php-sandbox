<?php
    $registered = true;
    $loggedIn;
    $arr = [1,2,3,4];

    echo $registered ? $loggedIn = true : $loggedIn = false;
    echo $loggedIn;


    $age = 20;
    $score = 15;
    echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));
?>

<div>
    <?php if($loggedIn) { ?>
        <h1>Welcome User</h1>
    <?php } else {?>
        <h1>Welcome Guest</h1>
    <?php } ?>
</div>

<div>
    <?php if($loggedIn) : ?>
        <h1>Welcome User</h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach($arr as $val) { ?>
        <?php echo $val; ?>
    <?php }; ?>
</div>