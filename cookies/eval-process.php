<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evaluation</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/ce61b18206.js" crossorigin="anonymous"></script>

</head>
<body>
<?php
if (isset($_POST['submit']))
{  if (!isset($_COOKIE[$_POST['user']]))
{setcookie($_POST['user'],$_POST['eval'],time()+120);
?>
<div class="alert alert-success" role="alert"> <?='Form submitted - Thank you'?></div>
<?php

}
else {
   // $error= 'you have already submitted an answer: '.$_POST['user'].' : '.$_COOKIE[$_POST['user']];}
    ?>
    <div class="alert alert-warning" role="alert"> <?='you have already submitted an answer: '.$_POST['user'].' : '.$_COOKIE[$_POST['user']]?></div>
    <?php
}
}
?>

</body>
</html>




