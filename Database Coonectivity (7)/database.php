<?php

$db_hostname ="localhost";
$db_username = "root";
$db_password="yash";
$db_name ="database1";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    echo "the connection is failed ".mysqli_connect_error();
    exit;

}

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$country=$_POST['country'];

$sql="insert into data(name , email ,password,country) values ('$name','$email','$pass','$country')";
// $sql="delete from data where name='$name'";
// $sql="update data set name='$name' where email='$email'";

$result=mysqli_query($conn,$sql);
if(!$result){
    echo " the failed to connect".mysqli_error($conn);
    exit;
}

echo " your regestration  is the successfully";
mysqli_close($conn);

?>