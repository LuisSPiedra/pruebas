<?php
include('conexion.php');

$con = conection();

$id = $_POST['ID'];

$Name = $_POST['Name'];
$LastName = $_POST['LastName'];
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];

$sql = "UPDATE users SET name='$Name', LastName='$LastName', UserName='$UserName', Password='$Password',Email='$Email' WHERE ID='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
};
?>