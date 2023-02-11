<?php
session_start();
      if(!isset($_SESSION['semail'])){
      header("Location: student_login.php");}  
?>



<html>
    <head>
            <title>Student | Update</title>     
            <link rel="stylesheet" href="css/signup.css">
    </head>
            <body>
                    <body style="background-color:silver;">
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
            
                <form method="POST" action="http://localhost/knowledge_cart/student_update.php">
              
                <h1>Update Details</h1>
                <fieldset>
                  <legend><span class="number">1</span>Basic details</legend>
                  <label>First name</label>
                  <input type="text" name="sfn" maxlength="25" size="35" required>
                  <label>Middle name</label>
                  <input type="text" name="smn" maxlength="25" size="35" required>
                  <label>Last name</label>
                  <input type="text" name="sln" maxlength="25" size="35" required>
                  <label>Gender</label>
                  <input type="radio" name="sgender" value="male" required> Male<br>
                  <input type="radio" name="sgender" value="female" required> Female<br>
                  <input type="radio" name="sgender" value="other" required> Other<br><br>
                  <label>Date Of Birth</label>
                  <input name="sdob" type="text" maxlength="0" placeholder="Can't be changed" name="dob">
                  <label>Email</label>
                  <input type="email" maxlength="0" placeholder="Can't be changed" name="semail" size="35">       
                  <label for="password">Password:</label>
                  <input type="password" name ="spwd" size="35" required>
                </fieldset>
                
                <fieldset>
                  <legend><span class="number">2</span>Address details</legend>
                  <label>Door No</label>
                  <input type="text" name="sdno" maxlength="25" size="35" required>
                  <label>Street name</label>
                  <input type="text" name="scolony" maxlength="25" size="35" required>
                  <label>City</label>
                  <input type="text" name="scity" maxlength="25" size="35" required>
                  <label>Postal code</label>
                  <input type="text" name="szip" maxlength="6" size="35" required>
                </fieldset>

                <input type="checkbox" required>I accept all the <a href='http://localhost/knowledge_cart/tandc_student_update.html'>Terms & Conditions</a><br><br>
                <br><br><br>
                <button type="submit">Update</button>
            </form>


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