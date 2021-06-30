<?php
//UI control panel to IoT for Robots
//Task when second training in Smart methods

//Define the required variables for the local database
$servername = "localhost";
$username = "root";
$password = "";
$db = "control_arm_panel"; //Table : motor_valuess

//server name, user name , password , database
$conn = mysqli_connect($servername, $username, $password,$db);



 //To response page 

 

	//save
    if (isset($_POST['save-submit'])) {
	//To take the date directly from the device used at its timing and not from the database
	

	//To take the amount in the slider from 1 to 100
	$motor_1_value = $_POST["motor_1"];
	$motor_2_value = $_POST["motor_2"];
	$motor_3_value = $_POST["motor_3"];
	$motor_4_value = $_POST["motor_4"];
	$motor_5_value = $_POST["motor_5"];
	$motor_6_value = $_POST["motor_6"];

	$sql = "INSERT INTO `motor_valuess` ( `motor_1`, `motor_2`, `motor_3`, `motor_4`, `motor_5`, `motor_6`) VALUES ( '$motor_1_value', '$motor_2_value', '$motor_3_value', '$motor_4_value', '$motor_5_value', '$motor_6_value');";
      
      if ($conn->query($sql) === TRUE) {
        echo "تم بنجاح";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
        }// save
 

	//run
	if (isset($_POST['run-submit'])) {
	//The transmitter for the robot is assumed with the emergence of a movement model of the robot
	echo("	تم التشغيل");			
		}// run

//This function stores the values in the database with taking the engine values.
//It is an alternative to save, but with the movement
 function WritingToDatabase($conn,  $motor_1_value, $motor_2_value, $motor_3_value, $motor_4_value, $motor_5_value, $motor_6_value) {

	//To take the date directly from the device used at its timing and not from the database

	
	//To take the amount in the slider from 1 to 180
	$motor_1_value = $_POST["motor_1"];
	$motor_2_value = $_POST["motor_2"];
	$motor_3_value = $_POST["motor_3"];
	$motor_4_value = $_POST["motor_4"];
	$motor_5_value = $_POST["motor_5"];
	$motor_6_value = $_POST["motor_6"];

	$sql = "INSERT INTO `motor_valuess` ( `motor_1`, `motor_2`, `motor_3`, `motor_4`, `motor_5`, `motor_6`) VALUES ('$motor_1_value', '$motor_2_value', '$motor_3_value', '$motor_4_value', '$motor_5_value', '$motor_6_value');";

	if ($conn->query($sql) === TRUE) {
  	echo "تم بنجاح";
	} else {
  	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
  }//end function WritingToDatabase

?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">
<meta charset="UTF-8">
<!-- UI control panel to IoT for Robots  -->
<!-- Task when second training in Smart methods  -->

<html>

<head>
    <title>Control arm panel</title>
    <main>  </main>

    <link rel="stylesheet" href="styles.css"> <!-- to link css -->

</head>

<body>


<div class="center">
<h1>التحكم بالذراع الالي</h1>

<div class="container">
<form action="" method="post">
<input type="hidden" name="action" value="submit" />







<div class="slidecontainer2">
  <p>  محرك 1: <input class="slider slider1" id="myRange1" name="motor_1" type="range" min="0" max="180" value="50"> 
  <span id="demo1"></span></p>
  <p>  محرك 2: <input class="slider slider2" id="myRange2" name="motor_2" type="range" min="0" max="180" value="50">
  <span id="demo2"></span> </p>
  <p>  محرك 3: <input class="slider slider3" id="myRange3" name="motor_3" type="range" min="0" max="180" value="50">
  <span id="demo3"></span>   </p>
  <p>  محرك 4: <input class="slider slider4" id="myRange4" name="motor_4" type="range" min="0" max="180" value="50">
  <span id="demo4"></span>   </p>
  <p>  محرك 5: <input class="slider slider5" id="myRange5" name="motor_5" type="range" min="0" max="180" value="50">
  <span id="demo5"></span>   </p>
  <p>  محرك 6: <input class="slider slider6" id="myRange6" name="motor_6" type="range" min="0" max="180" value="50">
  <span id="demo6"></span>   </p>

<div class="type-1">  



  <button class="type-1 type="button" name="save-submit" type="submit" name="save-submit" id="save-submit">
    <a href="" class="save_button">
      <span class="txt">حفظ</span>
      <span class="round"> </span>
    </a>
   </button>   



   <button class="type-1 type="button" name="run-submit" type="submit" name="run-submit" id="run-submit">
      <a href="" class="run_button">
      <span class="txt">تشغيل</span>
      <span class="round"></i></span>
    </a>
       </button>   
  </div>

</div>
</div>




<script>
var slider1 = document.getElementById("myRange1");
var output1 = document.getElementById("demo1");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;
}

//start
var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;

}
//end


//start
var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;

}
//end


//start
var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;

}
//end


//start
var slider4 = document.getElementById("myRange4");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
  output4.innerHTML = this.value;

}
//end


//start
var slider5 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider5.value;

slider5.oninput = function() {
  output5.innerHTML = this.value;

}
//end


//start
var slider6 = document.getElementById("myRange6");
var output6 = document.getElementById("demo6");
output6.innerHTML = slider6.value;

slider6.oninput = function() {
  output6.innerHTML = this.value;

}
//end


</script>

</body>

</html>