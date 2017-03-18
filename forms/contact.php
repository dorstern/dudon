<?php

$to = "dorshtern@gmail.com";

if (!isset($_POST["name"])){
	print "No name";
	exit;
}
$subject = $_POST["name"];

if (!isset($_POST["email"])){
	print "No email";
	exit;
}
$headers = "From: ".$_POST["email"]."\r\n";

$message = "";
if (isset($_POST["message"])){
	$message = $_POST["message"];
}

$output = "Success";
try{
	mail($to,$subject,$message,$headers);
} catch (Exception $e){
	$output = "Error: ".$e->getMessage();
}

echo json_encode($output);

?>