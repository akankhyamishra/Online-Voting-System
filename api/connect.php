<?php

$connect=mysqli_connect("localhost", "root", "", "voting");
if(!$connect){
   die("connection failed!".mysqli_connect_error());
}
echo "connected succesfully!";
?>