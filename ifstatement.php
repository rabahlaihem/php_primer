<?php $title="If Statement";include "includes/header.php"?>
    <h1>If - Else statements</h1>
    <?php
       //An if statement that will carry out an action based on the value of the variable

       echo "<h2>If Statement</h2>";

        $grade=50;
        if($grade >= 50){
            echo "<h3 style='color:green'>You Have Passed!</h3>";
        }else{
            echo "<h3 style='color:red'>You Have Failed!</h3>";
        }

        $grade = 'C';
        //If-Else If-Else
        if($grade =='A'){
            echo '<h2 style="color:green">YOU ARE SUPERSTAR!</h2>';
        }elseif($grade =='B'){
            echo '<h2 style="color:BLUE">YOU DID WELL!</h2>';
        }else{
            echo '<h2 style="color:RED">YOU HAVE FAILED....</h2>';
        }


     ?>
<?php require 'includes/footer.php'?>