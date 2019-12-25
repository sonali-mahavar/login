
<html>
   
   <head>
      <title>Register Page</title>
      
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
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Register</b></div>
				
            <div style = "margin:30px">
               
               <form action = "dp1.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
				  <label>Email id  :</label><input type = "text" name = "Email id" class = "box"/><br /><br />
				  <label>Mobile no. :</label><input type = "text" name = "Mobile no." class = "box"/><br /><br />
                  <label>Create a password  :</label><input type = "text" name = "Create a password" class = "box" /><br/><br />
				  <label>Confirm Password :</label><input type = "text" name = "Confirm password" class = "box"/><br /><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
              
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>

<link href="stylee.css" rel="stylesheet"> 