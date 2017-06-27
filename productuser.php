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
$id= $_SESSION["eeid"];
echo $id;
?>
<div class="row">
<font color="black"><font size="50"><center><img src="bootstrapdemo\images\image2.jpg"  class="img-circle" height="100" width="100"> TECHIE JUNK!!</div></font>
<div class="row">
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
<div class="row">
<div class="col-md-9">
<table class="table table-bordered">
<tr>
<?php
//$cnn=new mysqli("localhost","root","","demo");
//$sql="SELECT * from product_table";
//$result=$cnn->query($sql);
require 'productuserclass.php';
$obj=new productuserclass();
$res=$obj->productUser();
$count=0;
while($row=$res->fetch_assoc())
{
echo '<td><div class="row">';
 echo '<div class="col-sm-8 col-md-12">';
   echo '<div class="thumbnail">';
     echo '<img src="'. $row["image"]  .'"  alt="...">';
    echo  '<div class="caption">';
       echo '<h3><center>"'. $row["pro_manuf"] .'"</center></h3>';
      echo  '<p>...</p>';
      echo  '<p><a href="#" class="btn btn-primary" role="button">Buy Now</a> <a href="review.php?id='. $row["productid"] .'" class="btn btn-default" role="button">View More</a></p>';
     echo '</div>';
     echo   '</div>';
 echo '</div>';
echo '</div></td>';
/*echo '<td><div class="row">';
 echo  '<div class="col-sm-6 col-md-3">';
    echo '<div class="thumbnail">';
    echo  '<img src="'. $row["image"] .'" alt="...">';
      echo '<div class="caption">';
      echo '<h3><center>"'. $row["pro_manuf"] .'"<center></h3>';
      echo '<center><a href="review.php?id='. $row["productid"] .'" class="btn btn-primary" role="button">Review</a></center>';
     echo '</div>';
   echo  '</div>';
  echo '</div>';  
echo '</div></td>';*/
$count=$count+1;
if($count==3)
{
  $count=0;
  echo '</tr>';
}
}
?>
</table>
</div>
 <div class="col-md-3">
 <table class="table table-bordered">
<tr><td>Television</tr>
<tr><td>Mobile</tr>
<tr><td>Watches</tr>
</div>
</div>
</body>
</html>