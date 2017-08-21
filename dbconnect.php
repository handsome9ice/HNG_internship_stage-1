<?php

$host='localhost';
$user='root';
$pass='';
$db='mydb';

// Create connection
$con=mysqli_connect($host,$user,$pass,$db);
// Check connection
if ($con)
echo 'Connected successfully to mydb database';

$sql= "SELECT * FROM mytable1"; 
$result= $con -> query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>". $row["id"]. $row["username"]. $row["email"]. "</p>"; "<br>";
    }
}  else {
    echo "0 results";
}
?>
