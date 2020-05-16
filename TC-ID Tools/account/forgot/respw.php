<?php
include('auth.php');
$email = $_POST['email'];
$email = mysql_real_escape_string($email);
$cekemail = mysql_num_rows(mysql_query("SELECT * FROM user WHERE email='$email'"));
$nama = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE email='$email'"));
if (empty($email)){
  header('location: ../?msg=Email is empty!');
}
if($cekemail==1){
	function generate_random_string($name_length = 16) {
		$alpha_numeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		return substr(str_shuffle($alpha_numeric), 0, $name_length);
	}
		$reset_pass = generate_random_string();		
		$kepada 	= "$email";
		$judul		= "Reset Your Password";
		$dari 		= "From: syechrulrasta@gmail>com\r\n";
		$dari 	.= "MIME-Version: 1.0\r\n";
		$dari 	.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$pesan 		= "Information of your request new password https://tgtbf-checker.us.to/ :<br>";
		$pesan 	.= "Email : $nama[email] <br>";
		$pesan 	.= "Password : Please Click Link in Below: /account/forgot/newpass.php?confirm=$reset_pass <br>";
		$reset_encrypt = $reset_pass;

mail($kepada,$judul,$pesan,$dari);	

mysql_query("UPDATE user SET respw = '$reset_encrypt' WHERE email = '$email'");	
							 
		header('location: ../?msg=Password has been reset! Please check your email in inbox or spam!');
	} else { 
		header('location: ../?msg=Email is not registered!');
	}
?>