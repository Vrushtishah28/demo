<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_roll=$_POST["rolle"];
$_name=$_POST["namee"];
$_mob=$_POST["mob"];
$_add1=$_POST["add1"];
$_image=$_POST["im"];
//$cnn=new mysqli("localhost","root","","demo");
//$sql="UPDATE user_table set name='". $_name ."',mobile='". $_mob ."',address='". $_add1 ."',image='". $_image ."' where emailid=". $_roll ."";
require 'electronicsclass.php';
    $obj=new electronicsclass();
    $res=$obj->updatePro($_name,$_mob,$_add1,$_image,$_roll);

if($res===true)
{
    header('location:viewprof.php');
}
else
{
    echo "VALUES NOT INSERTED";
    echo $sql;
}

}
?>
