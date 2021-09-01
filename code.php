<?php 
if(isset($_POST["sub"]))
{
	$a1=$_POST["n1"];
	$a2=$_POST["n2"];
	$a3=$_POST["n3"];
    $a4=$_POST["n4"];
    $a5=$_POST["n5"];
    $a6=$_POST["n6"];
    $a7=$_POST["n7"];
    $a8 = implode(',', $_POST["n8"]);

	//To connect database 
	$conn=mysqli_connect("localhost","root","","testing");
	//Mysql Insert query
	$que="INSERT INTO user_info(FirstName,LastName,Email,Dob,Mobile,Designation,Gender,Hobbies) 
    VALUES('$a1', '$a2', '$a3','$a4',
    '$a5','$a6','$a7','$a8')";
	mysqli_query($conn, $que);
	header("location:index.php");
	
}
?>