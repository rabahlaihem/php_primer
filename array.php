<?php  $title="Arrays"; include "includes/header.php"?>
    <h1>Arrays</h1>
    <?php
    //a variable
    $num=3;

    //an array
    $numbers= array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    print_r($numbers) .'<br>';
    $size= count($numbers);
    echo "<p>Array Numbers is size: $size </p>";
    for($count= 0; $count < $size; $count ++){
        echo "<p>$numbers[$count]</p>";
    }
    ?>
 
<?php require 'includes/footer.php'?>