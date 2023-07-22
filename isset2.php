<?php
include_once 'stuconn.php';

if (isset($_GET['Register'])) {

   if (
      isset($_GET['StId']) && ($_GET['StName']) && ($_GET['StParentage']) && ($_GET['Stadd']) &&
      ($_GET['Stemail']) && ($_GET['Sttel']) && ($_GET['stQual']) && ($_GET['Hobby'])
   ) {

      $ID = $_GET['StId'];
      $Name = $_GET['StName'];
      $Parentage = $_GET['StParentage'];
      $Address = $_GET['Stadd'];
      $Email = $_GET['Stemail'];
      $Cell = $_GET['Sttel'];
      $Qualification = $_GET['stQual'];
      $Gender = $_GET['stgender'];
      $selectedHobby = $_GET['Hobby'];

      $Hobby = array();
      foreach ($selectedHobby as $value)
      {
      $Hobby[]=$value;
      }

      echo "
      <style>
         table{
          width:90%;
          border-collapse:collapse;
         }
         th,td{
            border:1px solid black;
            padding:10px;
            
         }
         th{
            background-color:lightgrey;
         }
      </style>
      <table>
      <tr>
      <th>Student ID</th>
      <th>Name</th>
      <th>Parentage</th>
      <th>Address</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Qualification</th>
      <th>Gender</th>
      <th>Hobby</th>
      
      </tr>
      <tr>
      <td>$ID</td>
      <td>$Name</td>
      <td>$Parentage</td>
      <td>$Address</td>
      <td>$Email</td>
      <td>$Cell</td>
      <td>$Qualification</td>
      <td>$Gender</td>
      <td>".implode(",",$Hobby)."</td>
      </tr>
      </table>";
   }
} else {
   echo "Failed";
}

$sql="INSERT INTO forms
(Name, Parentage, Address, Email, Cell, Qualification, Gender) Values('$Name','$Parentage','$Address','$Email','$Cell','$Qualification','$Gender')";
$data = mysqli_query($conn,$sql);
if($data)
{
    echo "<br>Form Submmited";
}
else
{
    echo "<br>Form Not Submmited";
}
?>