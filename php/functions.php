<?php
  function addTask() {
    require_once "conn.php";

    $name = $_POST['name'];

    $query = "INSERT INTO chore(name, status) VALUES ('$name', 0)";
    $result = mysqli_query($conn, $query);
    if($result) header("location: ../index.php");
    else echo "Task could not be added";
  }

  function updateTaskName() {
    require_once "conn.php";

    $id = $_POST['id'];
    $name = $_POST['name'];

    $query = "UPDATE chore SET name = '$name' WHERE id_chore = '$id'";
    $result = mysqli_query($conn, $query);
    if($result) header("location: ../index.php");
    else echo "Task could not be updated";
  }

  function deleteTask() {
    require_once "conn.php";

    $id = $_POST['id'];

    $query = "DELETE FROM chore WHERE id_chore = '$id'";
    $result = mysqli_query($conn, $query);
    if($result) header("location: ../index.php");
    else echo "Task could not be updated";
  }

  if (isset($_POST['verify'])) {
    $verify = $_POST['verify'];
    if ($verify == "create") {
      addTask();
    }
    if ($verify == "updateName") {
      updateTaskName();
    }
    if ($verify == "delete") {
      deleteTask();
    }
    else{
      echo "Form error";
    }
  }
  else{
    echo "Error";
  }
?>