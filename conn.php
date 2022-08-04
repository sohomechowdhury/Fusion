<?php
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "art";


$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo " Joining unsuccessful 😔";
}
if ($conn) {

    echo " Welcome 😊";
}
$id=$_POST["id"];
$check="SELECT * FROM cart WHERE id = '$id'";
$rs = mysqli_query($conn,$check);
$data = mysqli_fetch_assoc($rs);
$i=$data['id'];
$n=$data['name'];
$p=$data['price'];
$qry="INSERT INTO custom (id, name,price) VALUES ('$i', '$n', '$p')";
$run=mysqli_query($conn,$qry);
if($run){
    echo "success";
}