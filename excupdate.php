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
<?php
$email=$_SESSION["eeid"];
$name="";
$mobile="";
$address="";
$image="";
//$cnn=new mysqli("localhost","root","","demo");
  // $sql="select * from user_table where emailid='". $email ."'";
//$result=$cnn->query($sql);
//$_roll=$_GET["roll"];
 require 'electronicsclass.php';
    $obj=new electronicsclass();
    $res=$obj->viewPro($email);
$row=$res->fetch_assoc();

$name=$row["name"];
$mobile=$row["mobile"];
$address=$row["address"];
$image=$row["image"];

?>
<form method="post" action="excupdate1.php">
<input type="text" name="rolle" value=" <?php echo $email; ?>"><br>
<input type="text" name="namee" value="<?php echo $name; ?>"><br>
<input type="text" name="mob" value="<?php echo $mobile; ?>"><br>
<input type="text" name="add1" value="<?php echo $address; ?>"><br>
<input type="text" name="im" value="<?php echo $image; ?>"><br>
<input type="submit" value="Update">
</form>
</body>
</html>
