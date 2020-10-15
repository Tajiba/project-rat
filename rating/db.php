<?php
$con=mysqli_connect("localhost","root","","crud");
if($con)
{
    echo "connect";
}
else
{
    echo "not connect";
}
?>