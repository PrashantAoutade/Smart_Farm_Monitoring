
<?php
session_start();
if(isset($_SESSION["username"]))
{
header('location:./securepage.php');
}

?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body >
            <div class="header">
  <h1></h1>
</div><br><br><br>
<center><b>LOGIN fORM:</b></center><br>
        <form action="./Login_process.php" method="post">
<center>
    <div class="container" style="background-color:blue"> 
    <label for="uname"><b>Username :  </b></label><br>
    <input type="text" placeholder="Enter Username" name="username"  required><br>

    <label for="psw"><b>Password  :  </b></label><br>
    <input type="password" placeholder="Enter Password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=" password must contain one uppercase ,lowercase and digit and of min length 8" required><br>
       
      <button type="submit" name="btn_submit"><b>LOGIN</b></button><br>
 
        
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  </center> 
  
</form>
    </body>
</html>