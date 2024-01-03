<?php

$fName=$_POST["FirstName"];
$lName=$_POST["LastName"];
$pass=$_POST["password"];
$rPass=$_POST["rpassword"];
$mail=$_POST["email"];
$gender=$_POST["Gender"];

echo "The User first Name is : ".$fName."</br>";
echo "The User Last Name is : ".$lName."</br>";
echo "The User Password is : ".$pass."</br>";
echo "The User Retype Password is : ".$rPass."</br>";
echo "The User Email is : ".$mail."</br>";
echo "The User Gender is : ".$gender."</br>";

?>