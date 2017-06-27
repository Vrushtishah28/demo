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
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "phpmailer/class.phpmailer.php";
    $i=$_POST["uname"];
    $n=$_POST["umail"];
    $c=$_POST["upwd"];
    $p=$_POST["umob"];
    $m=$_POST["uadd"];
    $w=$_POST["uprof"];
    $flag='no';
    $random_alpha=md5(rand());
    $token=substr($random_alpha,0,6);
   // $cnn=new mysqli("localhost","root","","demo");
   // $sql="INSERT into user_table values('". $i ."','". $n ."','". $c ."','". $p ."','". $m ."','". $w ."')";
   require 'electronicsclass.php';
    $obj=new electronicsclass();
    $res=$obj->signsUp($i,$n,$c,$p,$m,$w,$flag,$token);
    if($res==true)
    {
        $message="Welcome";
//$message="hello";
// creating the phpmailer object
$mail = new PHPMailer(true);

// telling the class to use SMTP
$mail->IsSMTP();

// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
$mail->SMTPDebug = 1;

// enable SMTP authentication
$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'ssl';

// sets GMAIL as the SMTP server
$mail->Host = 'smtp.gmail.com';

// set the SMTP port for the GMAIL server
$mail->Port = 465;

// your gmail address
$mail->Username = 'maildemo254@gmail.com';

// your password must be enclosed in single quotes
$mail->Password = 'maildemo1234';

// add a subject line
$mail->Subject = ' Forget Password ';

// Sender email address and name
$mail->SetFrom('maildemo254@gmail.com', 'demo');

$email1=$n;
// reciever address, person you want to send

$mail->AddAddress($email1);

// if your send to multiple person add this line again
//$mail->AddAddress('tosend@domain.com');

// if you want to send a carbon copy
//$mail->AddCC('tosend@domain.com');


// if you want to send a blind carbon copy
//$mail->AddBCC('tosend@domain.com');

// add message body
$mail->MsgHTML($message);


// add attachment if any
//$mail->AddAttachment('time.png');

try {
    // send mail
	
	//don't forget to enable openssl true from php_extensions
    $mail->Send();
    $msg = "Mail send successfully";
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
}
echo $msg;
 }
     // echo "Records inserted";
    }
   
   // else
    //{
       
     //   echo "Values not inserted";
   // }

?>

<table align="center">
<form action="<?php $_SERVER["PHP_SELF"]?>" method="post" class="form-group" >
<center><h1>JOIN WHAT'S NEW TODAY!!!</h1></center>
<tr>
<td>
<input type="text" name="uname" class="form-control" type="text" placeholder="Username"><br>
<input type="text" name="umail" class="form-control" type="text" placeholder="E-mail id"><br>
<input type="password" name="upwd" class="form-control" type="text" placeholder="Password"><br>
<input type="text" name="umob" class="form-control" type="text" placeholder="Mobile number"><br>
<textarea name="uadd" placeholder="address" cols="50" rows="3"></textarea><br><br>
<input type="text" name="uprof" placeholder="Image Path" class="form-control"><br>
<tr><td colspan="2"><center><input type="submit" class="btn btn-info">CREATE ACCOUNT"</a><br><br>
<h3><center><img src="bootstrapdemo/images/image12.jpg" height="50%" width="50%" class="img img-circle"></a></center></h3>
</form>
</table>
</div>
</div>
</body>
</html>
