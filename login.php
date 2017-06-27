<?php
session_start();
?>
<html>
<head>
<script src="/bootstrapdemo/js/jquery-3.2.1.min.js"></script> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/bootstrapdemo/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="/bootstrapdemo/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="/bootstrapdemo/js/bootstrap.min.js"></script>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $n=$_POST["umail"];
    $c=$_POST["upwd"];
   // $cnn=new mysqli("localhost","root","","demo"); 
    //$sql=$cnn->query("select * from user_table where emailid='". $n ."' and password='". $c ."'");
    require 'electronicsclass.php';
    $obj=new electronicsclass();
    $res=$obj->getItems($n,$c);
    if($res->num_rows==1)
    {
        $_SESSION["eeid"]=$n;
        header('location:productuser.php');
    }
}
?>
<center><h1><span class="glyphicon glyphicon-log-in"> LOGIN</span></h1></center>
<form action="<?php $_SERVER["PHP_SELF"]?>" method="post" class="form-group" >
<table align="center">
<tr><td><br><br><br><input type="text" name="umail" class="form-control" type="text" placeholder="E-mail id"><br>
<input type="password" name="upwd" class="form-control" type="text" placeholder="Password"><br>
<a href="forgetpass.php">Forgot Password?</a><br><br><br>
<input type="submit" value="LOGIN" class="btn btn-info"></tr>

</form>
</body>
</html>