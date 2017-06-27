<?php
class productclass
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
        public function getProducts()
        {
            $con=productclass::connect();
            $sql="SELECT p.*,c.* from product_table p,cat_table c where c.cat_id=p.fk_cat_id";   
            $res=$con->query($sql);
            return $res;
            productclass::disconnect();
        }
        public function productInsert($i,$n,$c,$p,$m,$w,$q,$im,$gg)
        {
               $con=productclass::connect();
               $sql="INSERT into product_table values('". $i ."','". $n ."','". $c ."','". $p ."','". $m ."','". $w ."','". $q ."','". $im ."','". $gg ."')";
               $res=$con->query($sql);
               return $res;
            productclass::disconnect();
               
        }
}
?>