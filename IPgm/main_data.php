<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrs";
$errors = array();
$movie_name = array();
$movie_link = array();
$link = array();
// $p=array();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="select movie_name,movie_link from movie";
$result = $conn->query($sql);

while($row = mysqli_fetch_array($result))
{
	array_push($movie_name,$row["movie_name"]);
	array_push($movie_link,$row["movie_link"]);
}
function show($t,$n){
	if($t==0)
	{
		$sql="select actor1_link,actor2_link,d_link,genre from movie where movie_name ='$movie_name[$n]'";
		$result = $conn->query($sql);
		$row = mysqli_fetch_array($result);	
		array_push($link,$row["actor1_link"]);
		array_push($link,$row["actor2_link"]);
		array_push($link,$row["d_link"]);
		array_push($link,$row["genre"]);

		header('location:inter.php');
	}
}
mysqli_close($conn);

?>