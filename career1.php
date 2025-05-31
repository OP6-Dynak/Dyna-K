<?php
echo "1234";
die(); 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

error_reporting(E_ALL);

// Load Composer's autoloader
//require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$name = $_GET["name"]; 

echo $name;
 die();  
  
//*** Uniqid Session ***//  

 
/*  
$flgSend = @mail($strTo,$strSubject,null,$strHeader);  // @ = No Show Error //  
  
if($flgSend)  
{  
echo "Mail send completed.";  
}  
else  
{  
echo "Cannot send mail.";  
}  
*/


$mail = new PHPMailer();
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
var_dump($mail); 
 
 try(){
	 
	//$result = $mail->Send();
    echo "OK Message";
}catch(Exception $ex){
    var_dump($ex); 
	die();
}


 
die();
if($result == 1){
    echo "OK Message";
}
else{
    echo "Sorry. Failure Message";
}



?>  
