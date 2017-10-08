<?php
  $servername = "localhost";
  $username = "root";
  $password = NULL;
  $dbname = "marauders_map";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  try {
    $lat = $_POST['latitude'];
    $lng = $_POST['longitude'];
    $name = 'goks';
    $handle=$conn->prepare("INSERT INTO `location`(`latitude`, `longitude`, `name`) VALUES ('$lat','$lng','$name')");
    $handle->execute();
    return "success";
  }
  catch(Exception $e){
        return "F";
    }

  $conn->close();
  ?>