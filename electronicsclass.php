<?php
class electronicsclass
{
        private static $con=null;
        public static function connect()
        {
            self::$con=mysqli_connect("localhost","root","","demo");
            return  self::$con;
        }
        public static function disconnect()
        {
            mysqli_close(self::$con);
            self::$con=null;
        }
        public function getItems($n,$c)
        {
            $cnn=electronicsclass::connect();
            $sql="select * from user_table where emailid='". $n ."' and password='". $c ."'";   
            $res=$cnn->query($sql);
            return $res;
            electronicsclass::disconnect();
        }
        public function viewPro($email)
        {
            $cnn=electronicsclass::connect();
            $sql="select * from user_table where emailid='". $email ."'";
            $res=$cnn->query($sql);
            return $res;
            electronicsclass::disconnect();
        }
        public function updatePro($_name,$_mob,$_add1,$_image,$_roll)
        {
            $cnn=electronicsclass::connect();
           $sql="UPDATE user_table set name='". $_name ."',mobile='". $_mob ."',address='". $_add1 ."',image='". $_image ."' where emailid=". $_roll ."";
            $res=$cnn->query($sql);
            return $res;
            electronicsclass::disconnect();
        }
        public function signsUp($i,$n,$c,$p,$m,$w,$flag,$token)
        {
            $cnn=electronicsclass::connect();
                $sql="INSERT into user_table values('". $i ."','". $n ."','". $c ."','". $p ."','". $m ."','". $w ."','".$flag."','".$token."')";
            $res=$cnn->query($sql);
            return $res;
            electronicsclass::disconnect();
        }


}
?>