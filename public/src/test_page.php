<?php
session_start();
if(empty($_SESSION['semail'])){
    header("Location: student_login.php");
}
elseif(empty($_SESSION['qsno'])){
    header("Location: take_test.php");
}
else{
    
}
?>
<html>
<head>
    <title>Test Page</title>
</head>
<body>
    <form method="post">
    <?php 
    include 'connection.php';
    $qsno=$_SESSION['qsno'];
    $sql="SELECT qsn FROM  question WHERE `qsno`='$qsno' AND `qno`='1'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    <br>
    <br>
    <select name="1ans">
    <option value="oone">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT oone FROM  question WHERE `qsno`='$qsno' AND `qno`='1'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    <option value="otwo">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT otwo FROM  question WHERE `qsno`='$qsno' AND `qno`='1'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    </select>
    <br><br>
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT qsn FROM  question WHERE `qsno`='$qsno' AND `qno`='2'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    <br>
    <br>
    <select name="2ans">
    <option value="oone">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT oone FROM  question WHERE `qsno`='$qsno' AND `qno`='2'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    <option value="otwo">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT otwo FROM  question WHERE `qsno`='$qsno' AND `qno`='2'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    </select>
    <br><br>
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT qsn FROM  question WHERE `qsno`='$qsno' AND `qno`='3'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    <br>
    <br>
    <select name="3ans">
    <option value="oone">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT oone FROM  question WHERE `qsno`='$qsno' AND `qno`='3'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    <option value="otwo">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT otwo FROM  question WHERE `qsno`='$qsno' AND `qno`='3'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    </select>
    <br><br>
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT qsn FROM  question WHERE `qsno`='$qsno' AND `qno`='4'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    <br>
    <br>
    <select name="4ans">
    <option value="oone">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT oone FROM  question WHERE `qsno`='$qsno' AND `qno`='4'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    <option value="otwo">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT otwo FROM  question WHERE `qsno`='$qsno' AND `qno`='4'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    </select>
    <br><br>
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT qsn FROM  question WHERE `qsno`='$qsno' AND `qno`='5'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    <br><br>
    <select name="5ans">
    <option value="oone">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT oone FROM  question WHERE `qsno`='$qsno' AND `qno`='5'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    <option value="otwo">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT otwo FROM  question WHERE `qsno`='$qsno' AND `qno`='5'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    </select>
    <br><br>
    <?php
    $qsno=$_SESSION['qsno'];
    $sql="SELECT qsn FROM  question WHERE `qsno`='$qsno' AND `qno`='6'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    <br><br>
    <select name="6ans">
    <option value="oone">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT oone FROM  question WHERE `qsno`='$qsno' AND `qno`='6'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    <option value="otwo">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT otwo FROM  question WHERE `qsno`='$qsno' AND `qno`='6'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    </select>
    <br><br>
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT qsn FROM  question WHERE `qsno`='$qsno' AND `qno`='7'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    <br><br>
    <select name="7ans">
    <option value="oone">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT oone FROM  question WHERE `qsno`='$qsno' AND `qno`='7'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    <option value="otwo">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT otwo FROM  question WHERE `qsno`='$qsno' AND `qno`='7'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    </select>
    <br><br>
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT qsn FROM  question WHERE `qsno`='$qsno' AND `qno`='8'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    <br><br>
    <select name="8ans">
    <option value="oone">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT oone FROM  question WHERE `qsno`='$qsno' AND `qno`='8'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    <option value="otwo">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT otwo FROM  question WHERE `qsno`='$qsno' AND `qno`='8'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    </select>
    <br><br>
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT qsn FROM  question WHERE `qsno`='$qsno' AND `qno`='9'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    <br><br>
    <select name="9ans">
    <option value="oone">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT oone FROM  question WHERE `qsno`='$qsno' AND `qno`='9'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    <option value="otwo">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT otwo FROM  question WHERE `qsno`='$qsno' AND `qno`='9'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    </select>
    <br><br>
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT qsn FROM  question WHERE `qsno`='$qsno' AND `qno`='10'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    <br><br>
    <select name="10ans">
    <option value="oone">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT oone FROM  question WHERE `qsno`='$qsno' AND `qno`='10'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    <option value="otwo">
    <?php 
    $qsno=$_SESSION['qsno'];
    $sql="SELECT otwo FROM  question WHERE `qsno`='$qsno' AND `qno`='10'";
    $res=mysqli_query($dbc,$sql);
    $ans=mysqli_fetch_array($res);
    echo $ans[0];
    ?>
    </option>
    </select>
    <br><br>
    </form>
</body>
</html>
<?php

$qses=$_SESSION['qsno'];
$ans1=$_POST['1ans'];
$ans2=$_POST['2ans'];
$ans3=$_POST['3ans'];
$ans4=$_POST['4ans'];
$ans5=$_POST['5ans'];
$ans6=$_POST['6ans'];
$ans7=$_POST['7ans'];
$ans8=$_POST['8ans'];
$ans9=$_POST['9ans'];
$ans10=$_POST['10ans'];
$sql1="UPDATE `question` SET sans='$ans1' WHERE qsno='$qses' AND qno='1' ";
        $result= mysqli_query($con,$sql1);
?>