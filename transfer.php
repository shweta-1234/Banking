<?php
session_start();
$con=mysqli_connect('localhost','root','','shweta');
$q="select name from user";
$result=mysqli_query($con,$q);
$_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
   <title> viewUser  </title>
    </head>
    <style>
body{
 background-image:url('image\\2.jpg');
 background-size:cover;
	}
    .sur{
        padding :10px;
        margin: 15px;
        font-weight:bold;
        border-radius: 5px;
    }
    h1{ 
            font-size:60px;
            text-align:center;
    }
	</style>
    <body>
	<br><br><br>
	<center>
     <form action="checkcredit.php" method="post"  style="position:relative; center:30">
          
             <h1> <b><font color="#011627">Enter Credit To Transfer</font></b></h1>
          <br>
            <br>
          <input class= "sur" type="text" name="transfer" placeholder="Credit"><br>
          <br>
        
          <input class="radio" type="submit" value="OK" style="background-color:blue;color:white;font-size: 20px;width:150px; height:40px;border:1px solid blue;cursor:pointer;border-radius:10px">
        
        
        </form>

        </center>
    </body>
</html>