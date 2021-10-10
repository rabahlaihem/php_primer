<?php $title="While";include "includes/header.php"?>
    <h1>While Loop</h1>
    <?php
    $grade = 0;
      while($grade < 10){
        echo "<p>I AM LESS THAN 10!</p>";
        $grade ++;
      }
    ?>
<?php require 'includes/footer.php'?>