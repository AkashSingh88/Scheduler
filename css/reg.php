<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successfull";
}else{
	echo "no connection";
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['username'];
$pass = $_POST['password'];


$q = "select * from signin where name = '$name' && password = '$pass' " ;

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num==1){
	echo "duplicate data";
}else{
	$que = "insert into signin(name,password) values ('$name', '$pass')";
	mysqli_query($con, $que);
}





?>