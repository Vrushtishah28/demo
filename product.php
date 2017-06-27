<html>
<head>
<script src="../bootstrapdemo/js/jquery-3.2.1.min.js"></script> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../bootstrapdemo/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="../bootstrapdemo/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="../bootstrapdemo/js/bootstrap.min.js"></script>
</head>
<body>
<font color="black"><font size="50"><center><img src="../bootstrapdemo\images\image2.jpg"  class="img-circle" height="100" width="100"> TECHIE JUNK!!</div></font>
<body>
<!--<br><br><br><nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="productuser.php">Profile</a></li>
      <li><a href="viewprof.php">Products</a></li>
      <li><a href="excupdate.php">Category</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>-->
<br><br><br><nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <!-- <a class="navbar-brand" href="#">Brand</a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
          <ul class="dropdown-menu">
          
            <li><a href="product.php">Display products</a></li>
            <li><a href="proinsert.php">Add products</a></li>
           <!-- <li><a href="deletepr.php">Delete products</a></li>-->
          </ul>
        </li>
      </ul>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category<span class="caret"></span></a>
          <ul class="dropdown-menu">
          
            <li><a href="category.php">Display category</a></li>
            <li><a href="insertcategory.php">Add category</a></li>
            <li><a href="#">Delete category</a></li>
          </ul>
        </li>
      </ul>
      
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<table class="table table-bordered">
<form method="post" action=<?php echo $_SERVER["PHP_SELF"]; ?>>

<thead>
<th>Product id</th>
<th>Product name</th>
<th>Product color</th>
<th>Price</th>
<th>Product manufacturer</th>
<th>Product warranty</th>
<th>Product quanity</th>
<th>Product image</th>
<th>Category</th>
<th colspan="2">Action</th>
</thead>
<?php
require 'productclass.php';
$obj=new productclass();
$res=$obj->getProducts();
//$cnn=new mysqli("localhost","root","","demo");
 //$sql="SELECT p.*,c.* from product_table p,cat_table c where c.cat_id=p.fk_cat_id";  
 //$res=$cnn->query($sql);
while($row=$res->fetch_assoc())
{
echo '<tr>';
echo '<td>'. $row["productid"] .'</td>';
echo '<td>'. $row["productname"] .'</td>';
echo '<td>'. $row["productcolor"] .'</td>';
echo '<td>'. $row["price"] .'</td>';
echo '<td>'. $row["pro_manuf"] .'</td>';
echo '<td>'. $row["pro_warr"] .'</td>';
echo '<td>'. $row["prod_qty"] .'</td>';
echo '<td><img src="'.$row["image"].'" width="100%" class="thumbnail"></td>';
echo '<td>'. $row["cat_name"] .'</td>';
 echo '<td><a href="updatepr.php?id=' .$row["productid"] .'"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>';
 echo '<td><a href="deletepr.php?id=' .$row["productid"] .'"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>';
  echo '</tr>';
}
?>
<!--<td colspan="10"><center><a href="proinsert.php" class="btn btn-info"><font color="black">Insert</a></td>-->
</form> 
</table>
</body>
</html>

