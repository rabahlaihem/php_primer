<?php $title="Switch";include "includes/header.php"?>
<h1>Switch statements</h1>

<?php 
$grade = 'A';
switch($grade){
    case 'A': 
        echo '<h2 style="color:green">YOU ARE SUPERSTAR!</h2>';;
        break;
    case 'B': 
        echo '<h2 style="color:BLUE">YOU DID WELL!</h2>';
        break;
    default:
        echo '<h2 style="color:RED">YOU HAVE FAILED....</h2>';
        break;

}

?>
<?php require 'includes/footer.php'?>