<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="arzoo_data";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
$first_name = $_POST['full_name'];
$email = $_POST['email'];
$message_send = $_POST['message_send'];

$sql_query = "INSERT INTO entry_details (first_name,email, message_send)
	 VALUES ('$first_name','$email','$message_send')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>