<?php
//server  info
   $serverName = "localhost";
   $serverUser = "root";
   $serverPassword = "root";
   $database = "demo_php";

   // connect database
$conn = new mysqli($serverName,$serverUser, $serverPassword,$database);

//check connection
if($conn -> connect_error){
    die("connection failed");
}

//echo  "Connect successfully";
//Query sql
$sql = "SELECT * FROM users ";
$result = $conn -> query($sql);
$users = [];
if($result  -> num_rows > 0){
    while($row = $result -> fetch_assoc()){
        //echo $row["id"].$row['username'].$row["email"];
        $users[] = $row;
    }
}else{
    echo "No resuft found";
}
?>
<?php foreach ($users as $u) :?>
<p><?php echo $u["id"]."-".$u["username"]."-".$u['email'];?> </p>
<?php endforeach;?>
