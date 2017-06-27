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
<font color="black"><font size="50"><center><img src="bootstrapdemo\images\image2.jpg"  class="img-circle" height="100" width="100"> TECHIE JUNK!!</div></font>
<br><br><br><nav class="navbar navbar-inverse">
  <div class="container-fluid">
  
    <ul class="nav navbar-nav">
      <li class="active"><a href="productuser.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="viewprof.php">View Profile</a></li>
          <li><a href="excupdate.php">Edit Profile</a></li>
          <li><a href="changepass.php">Change Password</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
</div>
<center>
<table class="table table-bordered">
<?php
$email=$_SESSION["eeid"];
$name="";
$mobile="";
$address="";
$image="";
 //$cnn=new mysqli("localhost","root","","demo"); 
  //  $sql="select * from user_table where emailid='". $email ."'";
   // $result=$cnn->query("$sql");
   require 'electronicsclass.php';
    $obj=new electronicsclass();
    $res=$obj->viewPro($email);
    $row=$res->fetch_assoc();
     echo '<tr>';
      echo '<td><img src="' .$row["image"] .'" height="50%" width="30%"></td>';
      echo '<tr>';
    echo '<td>'. $row["name"] .'</td>';
    echo '<tr>';
    echo '<td>'. $row["mobile"] .'</td>';
    echo '<tr>';
    echo '<td>'. $row["address"] .'</td>';
?>
</table>
</center>
</body>
</html>