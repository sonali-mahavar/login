
<html>
   
   
<head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#ffa79a">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
             
			   <form action="data.php" method="post">
			   
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
				   <span class="psw">Forgot <a href="forget.php">Password</a></span>				  
                  <input type = "submit" value = " Submit "/><br />
				  </form>
			
				  
				  <span class="register">Dont have account? <a href="register.php">Register</a></span>
			               
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>
<link href="stylee.css" rel="stylesheet"> 