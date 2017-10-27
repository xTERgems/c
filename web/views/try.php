<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);


$conn->query('create table ashish(int id, int val)');
$conn->query('insert into ashish(1,100)');
$conn->query('insert into ashish(2,102120)');
$conn->query('insert into ashish(3,10330)');

$result = $conn->query('select * from ashish');


	while($row = mysqli_fetch_array($result)){
		echo $row[0];
    echo  $row[1];
	}


?>
