<?php 
session_start();
$sno=$_SESSION['sno'];
$pno=$_GET['pno'];
$one=1;
include('connection.php');
$sql1 = mysqli_query($dbc,"SELECT * FROM `product` WHERE pno='$pno'");
        $res = mysqli_fetch_array($sql1);
$sql2 = mysqli_query($dbc,"SELECT * FROM `cart` WHERE sno='$sno' AND pno='$pno'");
$res2= mysqli_fetch_array($sql2);

if(isset($res2)){
if($res2['quantity']==$res['pqty']){
    echo "
              <script>
              alert('You have already ordered the Maximum Quanity');
              window.location='student_shop.php';
              </script>
              ";

}
else{
    $quantity=$res2['quantity'];
    $quantity++;
    $sql="UPDATE `cart` SET `quantity`='$quantity' WHERE `pno`='$pno' AND `sno`='$sno'";
            $result= mysqli_query($dbc,$sql);
              echo "
              <script>
              alert('Product Added to Cart');
              window.location='student_shop.php';
              </script>
              ";
}

}
 
          else{

            $sql="INSERT INTO `cart`(`sno`, `pno`,`quantity`) VALUES ('$sno','$pno','$one')";
            $result= mysqli_query($dbc,$sql);
              echo "
              <script>
              alert('Product Added to Cart');
              window.location='student_shop.php';
              </script>
              ";
          }
 ?>