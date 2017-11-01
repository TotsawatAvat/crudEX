<?php
	require_once 'db_config.php';
	
	$sql = "SELECT * FROM members";
	$result = $conn->query($sql);
	//var_dumb($result);
	$data = [];
	while($row = $result->fetch_assoc()){
		//var_dump($row);
		echo $row['id'] . " : " . $row['fname'] . " : " .$row['lname'] . " : " . $row['contact'] . "<br>";
		$data[]=array($row[id],$row['fname',$row['lname'],$row['contact']);
	}
	var_dumb($data);
	$conn->close();
?>