<?php 
session_start();
$sno=$_SESSION['sno'];
include('connection.php');

$sql1 = mysqli_query($dbc,"SELECT * FROM `student` WHERE sno='$sno'");
        $res = mysqli_fetch_array($sql1);
        $credit=$res['scredits'];
echo "
<script>
alert('You have $credit credits left');
window.location='student_myaccount.php';
</script>
";
?>