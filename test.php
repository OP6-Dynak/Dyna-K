<?php

error_reporting(E_ALL);

echo 123456789;
//die();  
 
 
 
 
$name = $_GET["name"]; 

echo $name;
//die();



use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/PHPMailer/src/SMTP.php';


use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
//$mail->isHTML();
$mail->Username = 'dynak.web@gmail.com';
$mail->Password = 'Dynak@1012';
$mail->SetFrom('dynak.web@gmail.com','RESUME');
$mail->Subject = 'hello';
//$mail->Body = $strHeader;
$mail->Body = 'Hello';
$mail->AddAddress('itsupport@dynakstamp.com');
$mail->AddAddress('mtechmaths@gmail.com');
//var_dump($mail); 
///die();



 try{
	 
	$result = $mail->Send();
    echo "OK Message";
	die();
	
}catch(Exception $ex){
	echo "not ok";
    var_dump($ex); 
	
	die();
}



?>