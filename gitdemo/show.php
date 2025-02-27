<?php
include 'database.php';

$q = "select * from user";
$res = mysqli_query($con,$q);
while($row = mysqli_fetch_assoc($res)){
    echo "Id =>".$row["id"].",password =>".$row["password"];
    echo"<br>";
}




?>