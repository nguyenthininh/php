<?php
//sql injection  docj


//session_start();
$username = $_POST["username"];
$password = $_POST["password"];
//var_dump($username);
//var_dump($password);

//server info
$serverName = "localhost";
$serverUser = "root";
$serverPassword = "";
$database = "demo_php";

// connect database
$conn = new mysqli($serverName,$serverUser, $serverPassword,$database);

//check connection
if($conn -> connect_error){
    die("connection failed");
}
//    // demo with prepare statement
//    $sql_insert = "INSERT INTO users(username, email,password,age, address,telephone) VALUES  (?,?,?,?,?,?)";
//    $stmt = $conn -> prepare($sql_insert);
//    $stmt -> bind_param("sssiss",$u,$e,$p,$a,$ad,$t);
////    $u = $_POST["username"];
////    $e = $_POST["email"];
//
//$u = "userX";
//$e = "userx@gmail.com";
//$p = hash("sha-256","1234567");
//$a = "25";
//$ad = "Ha noi";
//$t = "09345678";
//$last_id = null;
//if($stmt ->execute()){
//    $last_id = $conn -> insert_id;
//}
//var_dump($last_id);

$sql = "SELECT * FROM users WHERE username LIKE '".$username."' AND password LIKE '".$password."'";
$result = $conn -> query($sql);
if($result  -> num_rows > 0){
    echo "Login susscesfull";
    $user = null;
   // user = null;
    while($row = $result -> fetch_assoc()){
        //echo $row["id"].$row['username'].$row["email"];
        $user = $row;
    }

    $_SESSION["usersession"] = $user;
    header("Location: index.php");
}else{
    $_SESSION['login_err'] = "Username or password is wrong";
//    echo "No resuft found";
//    header("location: login.php");
    echo "login failded";
}

