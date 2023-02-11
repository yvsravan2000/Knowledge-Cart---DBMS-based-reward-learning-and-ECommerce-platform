<?php
session_start();
include('connection.php');
$sno=$_SESSION['sno'];
 $ttl=$_SESSION['total'];
 $sql1 = mysqli_query($dbc,"SELECT * FROM `student` WHERE sno='$sno'");
$res = mysqli_fetch_array($sql1);


if($res['scredits']<$ttl){
    $sql2 = mysqli_query($dbc,"DELETE FROM `cart` WHERE sno='$sno'");
$res2 = mysqli_fetch_array($sql2);
echo "
      <script>
      alert('You have insufficient balance to place the order');
      window.location='student_shop.php';
      </script>
      ";

}
else{


$sql4 = mysqli_query($dbc,"INSERT INTO `order_student`(`ocost`, `sno`) VALUES ('$ttl','$sno')");
$res4 = mysqli_fetch_array($sql4);
$sql4 = mysqli_query($dbc,"SELECT * FROM `order_student` WHERE `sno`='$sno' AND `ocost`='$ttl'");
$res4 = mysqli_fetch_array($sql4);
$ono=$res4['ono'];
$sql5 = mysqli_query($dbc,"SELECT * FROM `cart` WHERE `sno`='$sno' ");
		
		while ($res5 = mysqli_fetch_array($sql5)) 
		{ $pno=$res5['pno'];

$sql6 = mysqli_query($dbc,"INSERT INTO `order_product`(`ono`, `pno`) VALUES ('$ono','$pno')");
$res6 = mysqli_fetch_array($sql6);
}

$sql2 = mysqli_query($dbc,"DELETE FROM `cart` WHERE sno='$sno'");
$res2 = mysqli_fetch_array($sql2);
$balance=$res['scredits']-$ttl;
$sql3 = mysqli_query($dbc,"UPDATE`student` SET `scredits`='$balance' WHERE sno='$sno'");
$res3 = mysqli_fetch_array($sql3);
echo "
      <script>
      alert('You order has been placed');
      window.location='student_shop.php';
      </script>
      ";
}

?>