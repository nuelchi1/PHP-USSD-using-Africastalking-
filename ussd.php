<?php
//This file will be used for africastalking interactions
we need to make sure the code runs after a $_POST so we wrap using the IF
if(!empty($_POST) && !empty($_POST['phoneNumber'])){
	require_once('connection.php');
	require_once('AfricasTalkingGateway.php');
	require_once('config.php');
	// receive the POST from AfricasTalking
	$sessionId     =$_POST['sessionId'];
	$serviceCode   =$_POST['serviceCode'];
	$phoneNumber   =$_POST['phoneNumber'];
	$text          =$_POST['text'];
	// since we need to correctly display next level we will explode the value of the user interaction- think 1*1
	$textArray=explode('*', $text);
	$userResponse=trim(end($textArray));
	// we then need to set the default level so as to conveniently get the main page
	$level=0;

?>
