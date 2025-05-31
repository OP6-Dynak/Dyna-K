<?php

$name = $_POST["name"]; 
$ph_no = $_POST["phone"];
$email = $_POST["email"];
$Lineofwork = $_POST["Lineofwork"];
$address = $_POST["address"];
$purpose = $_POST["purpose"];

if($purpose == '2')
{
$c_ctc = $_POST["c_ctc"];
$e_ctc = $_POST["e_ctc"];
$np_m = $_POST["np_m"];
$Notice_p = $_POST["Notice_p"];
}
else
{
	$c_ctc = '-';
    $e_ctc = '-';
	$np_m = '-';
	$Notice_p = '-';
}

$strSubject = $Lineofwork."-RESUME OF ".$name;  
//echo $strSubject;
//$strMessage = nl2br();  
//die();

$file_tmp  = $_FILES['fileAttach']['tmp_name'];
$file_name = $_FILES['fileAttach']['name'];
//...



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
$mail->Password = 'gezstobnfchvjkov';
$mail->AddAttachment($file_tmp, $file_name);
$mail->SetFrom('dynak.web@gmail.com','dynakstamp.com');
$mail->Subject = $strSubject;
$mail->Body = "Dear Administrator,\r\n  \r\n
New resume has been posted on dynakstamp.com the details are:\r\n \r\n NAME : ".$name."\r\n \r\nPHONE NUMBER : ".$ph_no."\r\n \r\n EMAIL : ".$email. "\r\n \r\n LINE OF WORK : " .$Lineofwork."\r\n \r\n ADDRESS : ".$address."\r\n \r\n Current CTC : ".$c_ctc."\r\n \r\n Expected CTC : ".$e_ctc."\r\n \r\n Notice Period in current Organisation : ".$np_m."\r\n \r\n Notice Period Negotiable (YES/NO) : ".$Notice_p;
//$mail->Body = 'Hello';Notice Period Negotiable (YES/NO)
$mail->AddAddress('itsupport@dynakstamp.com');
//$mail->AddAddress('hrsupport@dynakstamp.com');
//$mail->AddAddress('maithilisagar@dynakstamp.com');
//$mail->AddAddress('mtechmaths@gmail.com');
//var_dump($mail); 
///die();



 try{
	 
	$result = $mail->Send();
    echo "Your Resume is Uploaded Successfuly <a href='career.html'>Click Here</a> to back ";
	die();
	
}catch(Exception $ex){
	echo "not ok";
    var_dump($ex); 
	
	die();
}



?>