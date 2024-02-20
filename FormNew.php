<?php
$n=$_POST['sname'];
$s=$_POST
['sid'];
$con=mysqli_connect("localhost","root","","Student");
$sql="INSERT INTO UG(Stu_Name,Stu_Id) values ('$n','$s')";
$r=mysqli_query($con,$sql);
if($r)
{
echo "Successfully Submit";
}
else
{
echo "Not Added";
}