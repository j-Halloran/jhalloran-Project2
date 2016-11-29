<?php
  $host = $_SERVER['HTTP_HOST'];
  $table = 'FAVORITES_TABLE';
  $servername = 'localhost';
  $username = 'username';
  $password = 'password';
  $dbname = 'favorites';
  $favorite = '';
  $category = '';


  foreach ($_POST as $k => $v) {
    $category = $k;
  }

  //open db connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT category, favorite FROM FAVORITES_TABLE";
  $result = $conn->query($sql);

  if(mysqli_num_rows($result) > 0){
    while($row = $result->fetch_assoc()){
      if($row["category"]==$category){
        $favorite = "Jake's favorite ".$category." is ".$row['favorite']."!";
        break;
      }
    }
  }

  if($favorite == ''){
    $favorite = "Sorry, that category was not found, try album, food, band etc...";
  }

  echo $favorite;
?>
