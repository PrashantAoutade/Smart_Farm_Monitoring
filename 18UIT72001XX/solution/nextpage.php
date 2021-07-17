<?php
session_start();


if(!isset($_SESSION['username']))
{
	header('Location:./index.php');
}
if(isset($_POST['display']))
{
   
echo "".$_SESSION["username"];
    echo"<script>alert('this is your 2nd secure page if you want to logout then click logout') </script>";
}

?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center>
             <div class="row" style="margin-left:30px;margin-right:30px;margin-top:40px">
            
            <form action="logout.php" method="post">
                <br>
                <button type="submit" value=logout name="logout">logout</button>
            </form>
            </div>
            <br><br>
             
        <form action="#" method="post">
            <br>
            <button type="submit" value="display" name="display">Display</button>
            <br>
        </form>
        </div>
            </div>
        </center>
    </body>
        
</html>