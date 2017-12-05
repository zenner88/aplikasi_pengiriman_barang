<?php 
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['pass']) && empty($_SESSION['lvl'])) {
  echo "<a href=index.php><b>LOGIN</b></a></center>";
} else {
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div class="col-md-12" style="padding: 0px">
    <?php
      include("header.php");
    ?>
    <?php 
      include 'content.php';
    ?>
  </div>
</body>
</html>
<?php
}
?>