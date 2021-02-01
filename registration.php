<?php

session_start();
header('location:EH_login1.html');

$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'test');

 $fullname = $_POST['fullname'];
 $email = $_POST['email'];
 $phoneno = $_POST['phnum'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $repassword = $_POST['pswrepeat'];

$q = " select * from signup  where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data ";
}else{

	$qy= " insert  into signup(fullname,email,phnum,username,password,pswrepeat) values('$fullname','$email',$phoneno,'$username', '$password','$repassword')";
	mysqli_query($con, $qy);
}

?>