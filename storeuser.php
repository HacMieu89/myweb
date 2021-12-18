<?php
  session_start();
    $username=$_POST['username'];
    $address=$_POST['wallet'];
    
    include_once("conn.php");
    $username=$_POST['username'];
    $address=$_POST['wallet'];
    $sql_command = "INSERT INTO users (address,name) VALUES (?, ?)";
    $stmt = $conn->prepare($sql_command);
    $stmt->bind_param("ss", $address,$username);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    $_SESSION['useraddress']= $address;
    // header('location:pageshoping.php');
  ?>    