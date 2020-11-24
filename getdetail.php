<?php 
session_start();
$con=mysqli_connect('localhost','root','','shweta');
$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>
<html>
<head>
   <title>
   User View
    </title>
    </head>
    <style>
body{
background:url('image\\download.jpg');
background-repeat:no-repeat;
background-size:cover;
z-index:-1;
opacity:0.9;
}
       h1{ 
            font-size:50px;
      }  
	</style>
    <body>
	
	<center>
        <h1><font face="Verdana" color="green">Users Information </font></h1>
		<br>

        <table border=2 width="30%" height="70%">
		
	<thead bgcolor="lightblue">
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>
		
	</thead>
	<tbody  align="center">
		<tr bgcolor="burlywood">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

		</tr>
		<tr bgcolor="burlywood">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="burlywood">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="burlywood">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="burlywood">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="burlywood">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="burlywood">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="burlywood">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="burlywood">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="burlywood">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        
	</tbody>
</table>
<div>
 <div>
       <a href="index.php" ><input type="button" name="Home" value="Return Home" 
       style="background-color:blue;color:white;font-size: 20px;width:170px; 
       height:40px;border:2px solid blue;cursor:pointer;border-radius:10px"/>
            </a>
</div>
 </div>
        </center>
    </body>
</html>