<?php 
  $name = $_GET['name'];
  $message = "Hello, $name";
?>

<html>
  <head>
    <title><?php echo $message; ?></title>
  </head>
  <body>
    <?php echo "$message"; ?>
  </body>
</html>
