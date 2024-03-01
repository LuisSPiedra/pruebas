<?php
include('conexion.php');

$con = conection();

$id = null;

$Name = $_POST['Name'];
$LastName = $_POST['LastName'];
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];

$sql = "INSERT INTO users VALUES ('$ID', '$Name', '$LastName', '$UserName', '$Password', '$Email')";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
};
?>