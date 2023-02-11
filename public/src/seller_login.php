<?php
    include('connection.php');

    if($_POST){
        $email=$_POST['memail'];
        $pwd=$_POST['temp_pwd'];
        $sql="SELECT * FROM `seller` WHERE `memail`='$email' AND `mpwd`='$pwd'";
        $result=mysqli_query($dbc,$sql);
        if(mysqli_num_rows($result)==1){
            session_start();
            $sql1=mysqli_query($dbc,"SELECT * FROM `seller` WHERE `memail`='$email' AND `mpwd`='$pwd'");
            $res=mysqli_fetch_array($sql1);
            $_SESSION['memail']=$email;
            $_SESSION['mname']=$res['mname'];
            $_SESSION['mno']=$res['mno'];


            header("location:home_seller.php");
        }
        else{
            echo "<script>alert('Invalid Seller Login Credentials!')</script>";
        }
    }
?>
<?php
session_start();
      if(isset($_SESSION['memail'])){
      header("Location: home_seller.php");}  
?>


<html>
<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Seller | Sign In</title>
</head>

<body>
    <svg height="130" width="500">
        <defs>
          <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%"
            style="stop-color:red;stop-opacity:1" />
            <stop offset="100%"
            style="stop-color:yellow;stop-opacity:1" />
          </linearGradient>
        </defs>
        <ellipse cx="85" cy="70" rx="65" ry="55" fill="url(#grad1)" />
        <text fill="#000000" font-size="35" font-family="Verdana"
        x="37" y="86">KNOWLEDGE CART&#8482;</text>
      </svg>
  <div class="main">
    <p class="sign" align="center">Seller Login</p>
    <form class="form1" method="post">
      <input class="un" name="memail" type="email" align="center" placeholder="email" required>
      <input class="pass" name="temp_pwd" type="password" align="center" placeholder="password" required>
      <input type="submit" name="Submit" value="Sign In" class="submit">                 
    </div>

    <div style="background-color:grey;color:white;padding:20px;">
      <address class="cr">
      <p>Knowledge Cart Copyright &#169; 2019. All Rights Reserved. <a href= "mailto:sravan.reddy.99999@gmail.com">MAIL ME</a></p> 
      Visit us at:
      <br>
      https://shieldcloud102.blogspot.com<br>
      Amrita Vishwa Vidyappetham, Kasavanahalli<br>
      Bengaluru-560035<br>
      Karnataka<br>
      India<br>
      </address>
    </div> 
     
</body>

</html>
