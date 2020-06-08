<?php 
require_once "../bd/connection.php";
if(isset($_GET['search_param']))
{
	$search_param = $_GET['search_param']; // для удобства заносим в переменную
	$query = $conn->query("SELECT * FROM tovar WHERE name LIKE '%$search_param%'");

	echo json_encode($query->fetchAll());
}

?>