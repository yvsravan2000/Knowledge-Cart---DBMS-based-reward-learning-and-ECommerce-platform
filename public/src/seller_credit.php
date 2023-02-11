<?php 
session_start();
$mno=$_SESSION['mno'];
include('connection.php');

$sql1 = mysqli_query($dbc,"SELECT * FROM `seller` WHERE mno='$mno'");
        $res = mysqli_fetch_array($sql1);
        $credit=$res['mcredits'];
echo "
<script>
alert('You have $credit credits left');
window.location='seller_myaccount.php';
</script>
";
?>