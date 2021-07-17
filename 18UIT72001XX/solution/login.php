
<?php
session_start();

$username=$_POST["username"];
$password=$_POST["password"];
$submit=$_POST["btn_submit"];

if(isset($submit))
{
$conn=mysqli_connect("localhost","root","","data");
    if($conn)
    {
        $query="select username,password from admin where username='$username'and password='$password'";
        $res=mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>0)
        {
        $_SESSION["username"]=$username;
            header('location:./securepage.php');
         }
    
            else{
          header('location:./index.php');
       }
        
}else
    {
        echo "connection eroor!!";
    }
}
?>