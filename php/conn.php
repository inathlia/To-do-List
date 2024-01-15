<?php
  try {
    $conn = mysqli_connect("localhost", "root", "", "todo");
  } catch (\Exception $e) {
    echo $e;
  }
?>