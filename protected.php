<?php
  $url = $_GET['https://basketball-stars.io/']; // get the URL from a GET parameter
  $width = 800;
  $height = 600;
  $border = 1;

  echo "<iframe src='$url' width='$width' height='$height' frameborder='$border'></iframe>";
?>
