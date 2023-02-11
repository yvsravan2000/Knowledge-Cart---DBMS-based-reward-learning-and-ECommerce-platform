<?php
    include('connection.php');    
    if($_POST){
        $email=$_POST['semail'];
        $pwd=$_POST['temp_pwd'];
        $sql="SELECT * FROM `student` WHERE `semail`='$email' AND `spwd`='$pwd'";
        $result=mysqli_query($dbc,$sql);
        if(mysqli_num_rows($result)==1){
            session_start();
            $sql1=mysqli_query($dbc,"SELECT * FROM `student` WHERE `semail`='$email' AND `spwd`='$pwd'");
            $res=mysqli_fetch_array($sql1);
            $_SESSION['semail']=$email;
            $_SESSION['sname']=$res['sln'];
            $_SESSION['sno']=$res['sno'];
            $_SESSION['scredits']=$res['scredits'];
            header("location:home_student.php");
        }
        else{
            echo "<script>alert('Invalid Student Login Credentials!')</script>";
        }
    }
?>
<?php
session_start();
      if(isset($_SESSION['semail'])){
      header("Location: home_student.php");}  
?>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>Student | Sign In</title>
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
    <p class="sign" align="center">Student Login</p>
    <form class="form1" method="post">
        <input class="un" name="semail" type="email" align="center" placeholder="email" required>
        <input class="pass" name="temp_pwd" type="password" align="center" placeholder="password" required>
        <input type="submit" name="Submit" value="Sign In" class="submit">         
    </form>        
    </div>
    <div style="background-color:grey;color:white;padding:20px;">
      <address class="cr">
      <p>Knowledge Cart Copyright &#169; 2019. All Rights Reserved. <a href="mailto:sravan.reddy.99999@gmail.com">MAIL ME</a></p> 
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
