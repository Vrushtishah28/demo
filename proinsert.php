<html>
<head>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $i=$_POST["id"];
    $n=$_POST["name"];
    $c=$_POST["color"];
    $p=$_POST["price"];
    
    $m=$_POST["manuf"];
    $w=$_POST["warr"];
    $q=$_POST["qty"];
    $im="../pro_img/".basename($_FILES["img"]["name"]);
    $gg=$_POST["fk_cat_id"];
    if(move_uploaded_file($_FILES["img"]["tmp_name"],$im))
    {
   require 'productclass.php';
   $obj=new productclass();
   $res=$obj->productInsert($i,$n,$c,$p,$m,$w,$q,$im,$gg);
    if($res==true)
    {
        header('location:product.php');
    }
    else
    {
        echo $sql;
        echo "Values not inserted";
    }
}
}
?>
<form action="<?php $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data" method="post" >

<input type="text" name="id" placeholder="id"><br>
<input type="text" name="name" placeholder="name"><br>
<input type="text" name="color" placeholder="color"><br>
<input type="text" name="price" placeholder="price"><br>
<input type="text" name="manuf" placeholder="Manufacturer"><br>
<input type="text" name="warr" placeholder="Warranty"><br>
<input type="text" name="qty" placeholder="Quantity"><br>
<input type="file" name="img" ><br>
<select name="fk_cat_id">
<?php
$cnn=new mysqli("localhost","root","","demo");
if($cnn->connect_error)
{
    echo "Not connected"; 
}
$sql="select * from cat_table";
$result=$cnn->query($sql);
if($result-> num_rows>0){
while($row=$result->fetch_assoc())
{
    echo '<option value="'. $row["cat_id"] .'">'. $row["cat_name"] .'</option>';
}
}
?>
</select>
<input type="submit" name="Insert">
</form>
</body>
</html>