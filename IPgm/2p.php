<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrs";
$errors = array();
// $p=array();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['button'])){
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
     $conpassword = $conn->real_escape_string($_POST['conPassword']);
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $conpassword = $_POST['conPassword'];
    echo $conpassword;
    if(empty($email)){
        array_push($errors, "please...enter email id");
    }
    if(empty($password)){
        array_push($errors, "please...enter Password");
    }
    if(empty($conpassword)){
        array_push($errors, "please...enter Confirm Password");
    }
    if(count($errors) == 0){
        echo 'hiiii';
        if($password == $conpassword){
            echo 'HI';
            $sql = "INSERT INTO user (uname,upassword) VALUES ('$email','$password')";
            if($conn->query($sql) == TRUE){
                header('location: mainpage.php');
                exit();
            }
        }

    }
}



// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//     	array_push($p, $row["movie_link"]);
//     	array_push($p, $row["actor1_link"]);
//     	array_push($p, $row["actor2_link"]);
//     	array_push($p, $row["d_link"]);
//         echo $row["movie_link"]. "<br>" . $row["actor1_link"]. "<br>" . $row["actor2_link"]."<br>".$row["d_link"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

mysqli_close($conn);
?>