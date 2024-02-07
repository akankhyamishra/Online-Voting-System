<?php
session_start();

if(!isset($_SESSION['userdata'])){
    header("location: ../");
}
$userdata=$_SESSION['userdata'];
$groupdata=$_SESSION['groupdata'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <title>Document</title>
</head>

<body>
<style>
body {
    margin: 0;
    padding: 0;
    background: green !important;;
   
}

#header h1{
    display: flex;
    text-align: centre;
    justify-content: center;
    position: relative;
    top: 100px;
}

#header #backbtn{
    margin: 20px 20px 20px 20px;
    float: left;
    color: white;
    padding: 7px 7px 7px 7px;
    background: #59238F;
    border-radius: 5px;
}
#header #logoutbtn{
    margin: 20px 20px 20px 20px;
    float: right;
    color: azure;
    border-radius: 5px;
    padding: 7px 7px 7px 7px;
    background: #59238F;
}

#profile{
    background: white;
    width: 30%;
    position: relative;
    top: 150px;
    margin-left: 20px;
}
#profile b{
    display: flex;
    justify-content: center;
    /* align-items: center; */
}
#votebtn{
    margin: 20px 20px 20px 20px;
    /* float: right; */
    color: azure;
    border-radius: 5px;
    padding: 7px 7px 7px 7px;
    background: #59238F;
}
.group{
    float: right;
    color: white;
    background: white;
}
</style>
<div id="header">
    
    <button id="backbtn">Back</button>
    <button id="logoutbtn">Log-Out</button>
    <center>
    <h1>Online Voting System</h1>
    </center>
</div>
<hr>
<div id="profile">
    <img src="../uploads/<?php echo $userdata['photo']?>" height="100px"  width="100px"><br><br>
    <b>name:<?php echo $userdata['name']?></b><br><br>
    <b>mobile:<?php echo $userdata['mobile']?></b></br><br>
    <b>status:<?php echo $userdata['status']?></b></br><br>

</div>
<div class="group">
    <?php 
    if ($_SESSION['groupdata']) {
        # code...
        for ($i=0; $i < count($groupdata); $i++) {
            ?>
            <div>
                <img src="../uploads/<?php echo [$i]['photo']?>" width="100px" height="100px" alt="">
                <b>Group Name:<?php echo [$i]['name']?></b>
                <b>Votes:<?php echo [$i]['votes']?></b>
                <form action="#">
                    <input type="hidden" name="gvotes" value="votess">
                    <input type="text" name="votebtn" value="vbn" id="votebtn">
                </form>
            </div>
            <?php
            # code...
        }
    }else{

    }
   ?>
    

</div>

    
</body>
</html>