<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
   <title>Transfer</title>
 <style>
  <?php include "button.css" ?>
  .nav-ul {
   list-style-type: none;
   margin: 0;
   padding: 5px;
   verflow: hidden;
   
   }

  .nav-li {
    float:left;
  }

  .nav-li a {
   
    display: block;
    color:#010114;
    text-align: center;
    padding: 5px 5px;
    text-decoration: none;
    text-transform:uppercase;
  }
  body{
   background-color: #4db386;
   background-repeat: no-repeat;
   background-size: cover;
  }
  .form{
   text-align:center;
   
  }
  .button{
   text-align:center;
  }
  button{
   border-radius:10px;
   background-color:transparent;
  }
  button:hover{
   background-color:lightblue;
   color: white;
  }
  table{
   background-color:transparent;
   padding:50px;
   border:2px ridge black;
   border-radius: 20px;
  }
  .btn {
   background-color:RoyalBlue;
   border: none;
   color: white;
   padding: 12px 16px;
   font-size: 23px;
   cursor: pointer;
  }

  .btn:hover {
   background-color:white;
   color:black;
  }
 </style>
</head>
<body>
	
 <center>
  <div class="view">
   <br><br>
   <form action="check_transfer.php" method="post" >
    <div class="border">
    <table>
     <tr>
      <td style="font-size:15pt;color:black;">
       <label for="sender" align="left">Receiver Name :</label>
       &nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
           <?php while($row = $result->fetch_assoc()) { ?>
   <option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
   <?php } ?>
   </td>
  </tr><br>
  <tr>
   <td style="font-size:15pt;color:black;">
   <br><label for="transfer">Amount :</label> 
    &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" required></td>
  </tr>
       <tr>
   <td>
    <div class="button">
    <br><button type="submit" class="c" onMouseOver="this.style.color='white' "onMouseOut="this.style.color='white'" value="Credit" style="color:white;background-color: transparent;font-size:18px;height:40px; width:100px; border-radius: 30px; cursor:pointer; border: 2px solid white;margin-left: -80px; margin-top: 20px;">Transfer</button>
    </div>
     </td>
        </tr>
       </table>
    </div>
      </form>
    </div><br>
 <form action="user.php" method="post">
   <div>
    <button class="glow-on-hover" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button><br><br>
    
   </div>

 </form>
 <div class="buttons">
   <a href="index.php">
       <button class="glow-on-hover">HOME</button>
   </a>
 </div>
</center>
</body>
</html>

