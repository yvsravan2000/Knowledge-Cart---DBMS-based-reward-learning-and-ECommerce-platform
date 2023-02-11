<?php
session_start();
      if(!isset($_SESSION['aemail'])){
      header("Location: admin_login.php");}  
?>




<!DOCTYPE html>
<html>
    <head>
        <title>Add Questions</title>
        <link rel="stylesheet" href="css/question.css">
    </head>
    <body>
        <body style="background-color:silver;">
        <!--Header-->    
            <svg height="130" width="5000">
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
            x="37" y="86">KNOWLEDGE CART&#8482</text>
          </svg>
        
        <!--Middle-->
        <form method="POST" action="http://localhost/knowledge_cart/question_upload.php">
            <h1>Add Questions</h1>
            <h3>Enter question set number</h3>
            <input type="number" name="qsno" max="9999999999" maxlength="10" size="35" required>
            <h3>Enter question set password</h3>
            <input type="text1" name="qspwd" maxlength="30" size="35" required>
            <h3>Enter question number</h3>
            <input type="number" name="qno" min="1" max="10" maxlength="10" size="35" required>
            <h3>Enter question</h3>
            <input type="text" name="question" max="9999999999" maxlength="500" size="35" required>
            <h3>Enter option-1-(oone)</h3>
            <input type="text1" name="oone" maxlength="100" size="35" required>
            <h3>Enter option-2-(otwo)</h3>
            <input type="text1" name="otwo" maxlength="100" size="35" required>
            <h3>Enter correct answer</h3>
            <input type="text1" name="qcrtans" maxlength="100" size="35" required>
            <h3>Enter positive marks</h3>
            <input type="number" name="qpos" max="2" maxlength="10" size="35" required>
            <h3>Enter negative marks</h3>
            <input type="number" name="qneg" max="2" maxlength="10" size="35" required>
            <br>
            <br>
            <br>
            <br>
            <br>
            <button type="submit">ADD QUESTION</button>    
        </form>
        <br>
                    
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






