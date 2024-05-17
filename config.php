
<?php
$connection =mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,"blog");

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>