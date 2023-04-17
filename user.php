<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="userinfo";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

//Connection Check
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

//If save
if(isset($_POST['save']))
{
    $email = $_POST['email'];
	$passwords = $_POST['passwords'];

    $sql_query = "INSERT INTO user (email,passwords)
    VALUES ('$email','$passwords')";

    if (mysqli_query($conn, $sql_query)) 
	 {
		echo 'Register Succesful!<form action="index.html"><button type="submit">Return to Home Page</button></form>';
   
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);

}
?>
   
