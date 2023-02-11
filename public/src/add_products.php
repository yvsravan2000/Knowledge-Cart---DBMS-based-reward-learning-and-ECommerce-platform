<?php
session_start();
      if(!isset($_SESSION['memail'])){
      header("Location: seller_login.php");}  
?>


<!DOCTYPE HTML>
<html>
    <head>
            <title>Seller | Add Products</title>     
            <link rel="stylesheet" href="css/add_products.css">
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


                <form method="POST" action="http://localhost/knowledge_cart/product_uploadform.php">
                <h1>Add Products</h1>
                <fieldset>
                  <label>Select brand</label>
                  <select required name="pbrnd">
                        <option value="">---</option>
                        <option value="Classmate">Classmate</option>
                  </select>
                  <label>Select category</label>
                  <select required name="pcat">
                        <option value="">---</option>
                        <option value="Pen">Pen</option>
                        <option value="Scale">Scale</option>
                        <option value="Notebook">Notebook</option>
                        <option value="Geometry Box">Geometry Box</option>
                  </select>
                  <label>Select specification</label>
                  <select required name="pspec">
                        <option value="">---</option>
                        <option value="Blue">Pen colour: Blue</option>
                        <option value="Black">Pen colour: Black</option>
                        <option value="15cm">Scale: 15 CM</option>
                        <option value="30cm">Scale: 30 CM</option>
                        <option value="Unruled">Notebook: Long Un-ruled, 160 Pages</option>
                        <option value="Ruled">Notebook: Long Ruled, 160 Pages</option>
                        <option value="Basic">Geometry Box: Basic</option>
                        <option value="Advanced">Geometry Box: Advanced</option>
                  </select>
                  <label>Product name</label>
                  <input type="text" name="pname" maxlength="50" size="35" placeholder="Brand-Category-Specification" required>
                  <label>Product cost</label>
                  <input type="number" name="pcost" min="5" max="200" maxlength="10" size="35" required>   
                  <label>Product quantity</label>
                  <input type="number" name="pqty" min="1" max="50" maxlength="10" size="35" required>
                  

                </fieldset>
                <input type="checkbox" required>I accept all the <a href='http://localhost/knowledge_cart/tandc_product.html'>Terms & Conditions</a><br><br>
                <br><br><br>
                <button type="submit">Add Product</button>
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