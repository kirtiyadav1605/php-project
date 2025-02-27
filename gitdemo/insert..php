<?php

include 'database.php';

$q = "insert into user values(16,'kirti')";
if(mysqli_query($con,$q)){
    echo "inserted";
    echo "<br><br>";
}else{
    echo $mysqli_error;
}




?>