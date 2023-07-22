<?php
define("dbserver","localhost");
define("dbuser","root");
define("dbpassword",Null);
define("dbdatabase","studentform");

$conn=mysqli_connect(dbserver,dbuser,dbpassword,dbdatabase);
if(!$conn)
{
    echo "Connection Not Eshtablished";
}
else
{
    echo "Connected";
}
?>
