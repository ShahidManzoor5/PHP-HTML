
<?php
include_once 'dbconn.php';
$sql="INSERT INTO Ceo
(Name, Address, Contact) Values('Haya', 'Budgam', '9149478848')";

$data = mysqli_query($conn,$sql);
if($data)
{
    echo "<br>Value Inserted";
}
else
{
    echo "VAlue Not Inserted";
}
?>
