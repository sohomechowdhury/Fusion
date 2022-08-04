<?php
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "art";


$conn1 = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn1) {

    echo " Joining unsuccessful 😔";
}

$id=$_POST["id"];
$qry1="SELECT * FROM custom";
$run1=mysqli_query($conn1,$qry1);
if(mysqli_num_rows($run1)==0) {echo "Cart Empty ☹️";}
else{
$qry1="DELETE FROM custom WHERE id = '$id'";
$run1=mysqli_query($conn1,$qry1);
if($run1){
    echo "delete success";
}}