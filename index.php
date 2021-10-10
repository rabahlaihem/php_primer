     <?php $title="Home"; include "includes/header.php"?>
     <h1>Hello World-PHP Primer</h1>
     <?php 
     echo "Hello PHP!";
     echo "<br>";
     echo "Second Line!";
     echo "<br>";
     ?>

<?php 
$name= 'Rabah Laihem';
$age =23;
     echo $name;
     echo "<br>";
     echo "Second Line!";
     echo "<br>";
     echo "<h1>May name is: $name</h1>";
     echo "<br>";
     echo '<h1>May name is:'. $name.'</h1>';
     echo "<br>";
     echo '<h1>May age is:'. $age.'</h1>';
     ?>
     <a href="https://www.heroku.com" class="btn btn-success" target="_blank">Heroku.com</a>
<?php require 'includes/footer.php'?>