<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select *from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Transaction</title>
 <style>
  <?php include "button.css" ?>
  .nav-ul {
   list-style-type: none;
   margin: 0;
   padding: 5px;
   overflow: hidden;
   
   }

  .nav-li {
    float:left;
  }

  .nav-li a {
   
    display: block;
    color:white;
    text-align: center;
    padding: 8px 10px;
    text-decoration: none;
    text-transform:uppercase;
  }
  body{
   background-color: #4db386;
      background-repeat: no-repeat;
   background-size:cover;
   font-family: "Times New Roman", sans-serif;
  }
  table{
   text-align:center;
   margin-left: auto;
   margin-right: auto;
   border:4px solid black;
   background: transparent;
   border-radius: 20px;
   font-family: "Times New Roman", sans-serif;
  }
  th{
   color:black;
   font-size:26px;
   padding:16px;
  }
  
  td{
   font-size:23px;
   color: white;
   padding: 10px 20px 10px 22px;
  }
  tr{
   transition: background 0.3s, box-shadow 0.3s;
  }
  tr:hover{
   background-color: #5680E9;
  }
  th,td{
   border-collapse:collapse;
   border:2px groove black;
  }
  h2{
   padding:20px;
   font-size:35px;
   color:#805a46;
   text-shadow: 1px 1px black;
   text-align:center;
  }
  .btn {
   background-color:RoyalBlue;
   border: none;
   color: white;
   padding: 12px 16px;
   font-size: 23px;
   cursor: pointer;
   border-radius: 20px;
  }
  .buttons{
   
   right:42%;
   text-align:center;
  }
 </style>
 </head>
 <body>
  <ul class="nav-ul">
 <a href="index.php">
  <h2 style=" font-family:Agency FB; font-size: 55px;color:#380036; float: center;">Transactions</h2>
 </a>
 </ul> 
  <table class="flat-table-1">
   <tr>
    <th>Sender</th>
    <th>Receiver</th>
    <th>Amount</th>
   </tr>
   <tr>
   
   <?php while($row = $result->fetch_assoc()) { ?>
   
   <tr>
    <td><?php echo $row["sender"]; ?></td>
    <td><?php echo $row["receiver"]; ?></td>
    <td><?php echo $row["amount"]; ?></td>
   </tr>
   <?php } ?>
  </table>
  <br>
  <br>
  <form action="index.php" method="post">
   <div class="buttons">
 <a href="index.php">
    <button class="glow-on-hover">BACK</button>
 </a>
  </form>
  
 </body>
</html>
