<?php 
	//the object sent to php
	$data = $_POST;
	print_r($data);
	print_r("hello");
	//GET the data.json file from the server and save as variable
	$file = file_get_contents('data.json');
	//Decode the data.json into an array
	$json_decoded = json_decode($file);
	console.log($json_decoded);
	//Append the $data contents to $json_decoded
	array_push($json_decoded, $data);
	//Convert $json_decoded back to JSON format
	$json_encode = json_encode($json_decoded);
	//Return values
	print_r($data); 
	//Save the $json_encode data as data.json
	file_put_contents('data.json', $json_encode);

?>