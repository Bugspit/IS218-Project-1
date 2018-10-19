<!DOCTYPE html>
<html>
<body>



<h1>Account Created</h1><br><br>
<?php

error_reporting(E_ALL);
ini_set('displaying_errors','1');

$email = $passWord =''; 

$email = $_POST['email'];
$passWord = $_POST['passWord'];

?> 
Email: <?php if (empty($email)){
	echo 'Please enter an email';
}elseif(strpos($email,'@') == false){
	echo 'Please enter valid email';
}else{ echo $email;
}
?><br>

Password:<?php if (empty($password)){
	echo 'Please enter a password';
}elseif(strlen($passWord) < '8'){
	echo 'Please enter a password with 8 or more characters';
}else{
	echo $passWord;
}
?>

</body>
</html>
