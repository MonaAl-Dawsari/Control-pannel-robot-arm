<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<title>response</title>
    <main>response page for the AI teams</main>
<head>
<link rel="stylesheet" href="styles.css"> <!-- to link css -->

<html>

<?php

//Define the required variables for the local database
$servername = "localhost";
$username = "root";
$password = "";
$db = "Robot-arm-with-a-camera";

//server name, user name , password , database
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }
 //echo "Connected successfully, the response is :      ";


 // write query for all pizzas
 $sql_ui_control = 'SELECT * FROM `Direction_and_motor_values`';

 // get the result set (set of rows)
 $result = mysqli_query($conn, $sql_ui_control);

 // fetch the resulting rows as an array
 $direction_commands = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Print the last value found in the local database
      //echo ("<br />  Date and time:  ");
      //echo $direction_commands[count($direction_commands)-1]['date'];

      //echo ("<br />  Direction:  ");
      echo $direction_commands[count($direction_commands)-1]['Forwards'];
      echo $direction_commands[count($direction_commands)-1]['Backwards'];
      echo $direction_commands[count($direction_commands)-1]['Right'];
      echo $direction_commands[count($direction_commands)-1]['Left'];

      echo ("<br /> motor 1 : ");
      echo $direction_commands[count($direction_commands)-1]['motor_1'];
      echo ("<br /> motor 2 : ");
      echo $direction_commands[count($direction_commands)-1]['motor_2'];
      echo ("<br /> motor 3 : ");
      echo $direction_commands[count($direction_commands)-1]['motor_3'];
      echo ("<br /> motor 4 : ");
      echo $direction_commands[count($direction_commands)-1]['motor_4'];
      echo ("<br /> motor 5 : ");
      echo $direction_commands[count($direction_commands)-1]['motor_5'];
      echo ("<br /> motor 6 : ");
      echo $direction_commands[count($direction_commands)-1]['motor_6'];

 // free the $result from memory (Good Practise)
 mysqli_free_result($result);

 // close connection
 mysqli_close($conn);
?>




