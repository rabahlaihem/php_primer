<?php $title="Do While"; include "includes/header.php"?>
    <h1>Do While Loop</h1>
    <?php
    $grade = 0;
      do{
        echo "<p>I AM LESS THAN 10!</p>";
        $grade ++;
      }while($grade < 10);
    ?>
<?php require 'includes/footer.php'?>