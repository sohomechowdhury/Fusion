<?php
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "art";


$conn1 = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn1) {

    echo " Joining unsuccessful 😔";
}
$qry1="SELECT * FROM custom";
$run1=mysqli_query($conn1,$qry1);
if(mysqli_num_rows($run1)==0) {echo "Cart Empty ☹️";}
else{
    echo "Products on cart  ::  \n";
    $c=0;
    while($r = mysqli_fetch_array($run1)){ 
        echo $r['name'],'  -';
        echo "$",$r['price'],"\n";
        $c+=$r['price'];
     }
    echo 'Products in cart '.mysqli_num_rows($run1)."\n";
    echo 'Total price :: $'.$c;
}
