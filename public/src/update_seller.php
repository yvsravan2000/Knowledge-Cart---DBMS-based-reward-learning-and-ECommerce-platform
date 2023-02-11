<?php
session_start();
      if(!isset($_SESSION['memail'])){
      header("Location: seller_login.php");}  
?>



<html>
    <head>
            <title>Seller | Update</title>     
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
            
                <form method="POST" action="http://localhost/knowledge_cart/seller_update.php">
              
                <h1>Update Details</h1>
                <fieldset>
                  <legend><span class="number">1</span>Basic details</legend>
                  <label>Store name</label>
                  <input type="text" name="mname" maxlength="25" size="35" required>
                  <label>City or Location</label>
                  <input type="text" name="mloc" maxlength="25" size="35" required>
                  <label>Email</label>
                  <input type="email" name="memail" size="35" maxlength="0" placeholder="Can't be changed">  
                  <label for="password">Password:</label>
                  <input type="password" name ="mpwd" size="35" required>
                </fieldset>

                <fieldset>
                  <legend><span class="number">2</span>Bank details</legend>
                  <legal>Account holder name</legal>
                  <input type="text" name="macntname" size="35" maxlength="0" placeholder="Can't be changed">
                  <legal>Account number</legal>
                  <input type="text" name="maccno" size="35" maxlength="0" placeholder="Can't be changed">
                  <legal>Bank name</legal>
                  <input type="text" name="mbname" size="35" maxlength="0" placeholder="Can't be changed">
                  <legal>IFSC code</legal>
                  <input type="text" name="mifsc" size="35" maxlength="0" placeholder="Can't be changed">
                </fieldset>       

                <fieldset>
                  <legend><span class="number">3</span>Address details</legend>
                  <label>Door No</label>
                  <input type="text" name="mdno" maxlength="25" size="35" required>
                  <label>Street name</label>
                  <input type="text" name="mcolony" maxlength="25" size="35" required>
                  <label>City</label>
                  <input type="text" name="mcity" maxlength="25" size="35" required>
                  <label>Postal code</label>
                  <input type="text" name="mzip" maxlength="6" size="35" required>
                </fieldset>

                <input type="checkbox" required>I accept all the <a href='http://localhost/knowledge_cart/tandc_seller_update.html'>Terms & Conditions</a><br><br>
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