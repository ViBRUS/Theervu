<?php 
$db_name = 'contact';
$db_user = 'root';
$db_pass = '';
$db_host = 'localhost'; 

//$response = array();
//$inputJSON = file_get_contents('php://input');
//$input = json_decode($inputJSON, TRUE); //convert JSON into array

$conn = mysqli_connect($db_host, $db_user, $db_pass,$db_name);

	$name = $_POST['name'];  //review
	$phone = $_POST['phone'];		//source
	$email = $_POST['email'];
	$message= $_POST['message'];

	


if (!$conn) 
{
	
    $response["status"] = 3;
	$response["message"] = "Login Error";	
}
else
{
		$query = "INSERT INTO contacttable(name,phone,email,message) VALUES('$name','$phone','$email','$message')";		
		$result = mysqli_query($conn,$query);
		
	
		if(!$result)
		{
			$response["status"] = 0;
			$response["message"] = "Error registering the user";
		}
		else
		{
			$response["status"] = 1;
			$response["message"] = "Registration successful";
			
		}				
				mysqli_close($conn);
     header('Location: index.html');
}

?>
