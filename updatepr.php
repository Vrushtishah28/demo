<html>
<head>
</head>
<body>
<?php
$product_id="";
$prod_name="";
$prod_color="";
$prod_price="";
$prod_manuf="";
$prod_warr="";
$prod_qty="";
$prod_img="";
$product_id=$_GET["id"];
$cnn=new mysqli("localhost","root","","demo");
$sql="SELECT * from product_table where productid=".$product_id;
$result=$cnn->query($sql);
$row=$result->fetch_assoc();
$prod_name=$row["productname"];
$prod_color=$row["productcolor"];
$prod_price=$row["price"];
$prod_manuf=$row["pro_manuf"];
$prod_warr=$row["pro_warr"];
$prod_qty=$row["prod_qty"];
$prod_img=$row["image"];

?>
<form enctype="multipart/form-data" action="updatepr1.php?img=<?php echo $prod_img;?>" method="post">
<input type="text" name="id" value="<?php echo "$product_id";?>"><br>
<input type="text" name="name"  value="<?php echo "$prod_name";?>"><br>
<input type="text" name="color"  value="<?php echo "$prod_color";?>"><br>
<input type="text" name="price"  value="<?php echo "$prod_price";?>"><br>
<input type="text" name="manuf"  value="<?php echo "$prod_manuf";?>"><br>
<input type="text" name="warr"  value="<?php echo "$prod_warr";?>"><br>
<input type="text" name="qty"  value="<?php echo "$prod_qty";?>"><br>
<img src=<?php echo $prod_img;?> height="40%" width="40%"><br>
<input type="file" name="img"><br>  
<input type="submit" value="Update">
</form>
</body>
</html>
