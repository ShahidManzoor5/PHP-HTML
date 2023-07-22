
<?php
include_once 'dbconn.php';
$sql="CREATE TABLE HODS
(
    Id int(6) Unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name Varchar(20) Not NULL,
    Parentage Varchar(20) Not NULL,
    Address Varchar(30) Not NULL,
    Contact Varchar(10) Not NULL
)";

$query = mysqli_query($conn,$sql);
if($query)
{
    echo "Table created";
}
else
{
    echo "Table Not Created";
}
?>
