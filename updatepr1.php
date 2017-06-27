<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$old_img=$_GET["img"];
$product_id=$_POST["id"];
$prod_name=$_POST["name"];
$prod_color=$_POST["color"];
$prod_price=$_POST["price"];
$prod_manuf=$_POST["manuf"];
$prod_warr=$_POST["warr"];
$prod_qty=$_POST["qty"];
$prod_img=basename($_FILES["img"]["name"]);
if($prod_img=="")
{
$prod_img=$old_img;
}
else
{
    unlink($old_img);
    move_uploaded_file($_FILES["img"]["tmp_name"],"pro_img/".$prod_img);
    $prod_img="pro_img/".$prod_img;
}
$cnn=new mysqli("localhost","root","","demo");
$sql="UPDATE product_table set productname='". $prod_name ."',productcolor='". $prod_color ."',price='". $prod_price ."',pro_manuf='". $prod_manuf ."',pro_warr='". $prod_warr ."',prod_qty='". $prod_qty ."',image='". $prod_img ."' where productid=". $product_id ."";
if($cnn->query($sql)===true)
{
    header('location:product.php');
}
else
{
    echo "VALUES NOT INSERTED";
    echo $sql;
}
}
?>


