
<?php session_start();?>
<html>
<head>
</head>
<body>
<form method="post" action="changepass1.php">
<?php
$iid=$_SESSION["eeid"];
echo $iid;
//comment
?>
<input type="password" name="oldpass" placeholder="Enter your old Password"><br>
<input type="password" name="newpass" placeholder="Enter your new Password"><br>
<input type="password" name="confpass" placeholder="Confirm your password"><br>
<input type="submit" value="change">
</form>
</body>

</html>