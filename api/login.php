<?php
session_start();
include("connect.php");

$name= $_POST['name'];
$password= $_POST['password'];
$role=$_POST['role'];

$result=mysqli_query($connect, "SELECT * FROM user WHERE name='$name' AND password='$password' AND role='$role'");
if (mysqli_num_rows($result)>0 ){
    # code...
    $userdata=mysqli_fetch_array($result);
    $group=mysqli_query($connect, "SELECT * FROM user WHERE role=2");
    $groupdata=mysqli_fetch_all($group, MYSQLI_ASSOC);

    $_SESSION['userdata']=$userdata;
    $_SESSION['groupdata']=$groupdata;

    echo '
    <script>
    window.location="../routes/dashboard.php";
    </script>
    ';
}
else{
    echo '
    <script>
    alert("invalid credentials!");
    window.location="../";
    </script>
    ';
}

?>