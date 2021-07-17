<?php
session_start();


if(!isset($_SESSION['username']))
{
	header('Location:./index.php');
}
if(isset($_POST['display']))
{
   
echo "".$_SESSION["username"];
    echo"<script>alert('this is your 1 st secure page if you want to go next page then click go to next') </script>";
}


    
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center>
            <div class="row" style="margin-left:40px;margin-right:40px;margin-top:60px">

        
        <br>
        <form action="nextpage.php" method="post">
            <button type="submit" value="nextpage" name="submit">go to next</button>
        </form>
            </div>
            <br>

        <form action="#" method="post">
            <br>
            <button type="submit" value="display" name="display">click here</button>
            <br>
        </form>
        </div>
            </div>
        </center>
    </body>
</html>