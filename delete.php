<?php




require_once "config.php";

$delete = $_GET["delete"]; 

$sql ="delete from blogdb where id = '$delete'";



if(mysqli_query($connection,$sql)){
    echo '<script> location.replace("index.php") </script>';
}
else{
    echo "connection error .$connection->error";
   
} 

?>