<?php 

$conn = new mysqli("127.0.0.1", "root", "", "dbphp7");

if ($conn->connect_error){

	echo "Error: " . $conn->connect_error;

}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

/*
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {  

	var_dump($row);

}*/

//Pode ser tb: $row = $result->fetch_assoc()

while ($row = $result->fetch_assoc()) {  

	array_push($data, $row);
	//var_dump($row);

}

echo json_encode($data);

 ?>