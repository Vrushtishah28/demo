<?php
class productuserclass
{
    private static $cnn=null;
    private static function connect()
    {
        self::$cnn=mysqli_connect("localhost","root","","demo");
        return self::$cnn;

    }
       private static function disconnect()
        {
            mysqli_close(self::$con);
            self::$con=null;
        }
    public function productUser()
    {
        $cnn=productuserclass::connect();
        $sql="select * from product_table";
        $res=$cnn->query($sql);
        return $res;
         productclass::disconnect();
    }
     public function profileView($email)
    {
        $cnn=productuserclass::connect();
        $sql="select * from user_table where emailid='". $email ."'";
        $res=$cnn->query($sql);
        return $res;
         productclass::disconnect();
    }
    	public function forgetPasswd($email)
		{
		$cnn=productuserclass::connect();
		$sql="select * from user_table where emailid='". $email ."'";
		$res=$cnn->query($sql);
		if($res->num_rows==1)
		{

		$row=$res->fetch_assoc();
		
			return $row["password"];
		}
		else
		{
			$msg="num of rows are less then 1";
			return $msg;
		}

		user_database::disconnect();
		
		
		}
    

}


?>