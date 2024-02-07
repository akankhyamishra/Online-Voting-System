<?php
include("connect.php");

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpswd=$_POST['cpswd'];
$photo=$_FILES['photo']['name'];
$temp=$_FILES['photo']['temp'];
$role=$_POST['role'];
// $register=$_POST['register'];

if($password==$cpswd){
    move_uploaded_file($temp, "../uploads/$photo");
    $sql="INSERT INTO user (name, mobile, password, photo, role, status, votes) VALUES ('$name', '$mobile','$password', '$photo','$role', 0, 0)";
    if (mysqli_query($connect, $sql)){
       echo "
       <script>
       alert('registration successful');
       window.location='../';
       </script>
        ";
    }
    else{
        echo'
        <script>
        alert("registration successful");
       window.location="../routes/register.html";
        </script>
        ';
    }

}

else{
    echo "
    <script>
    alert('password does not match!');
    window.location = '../routes/register.html';
    </script>
    ";
}

?>