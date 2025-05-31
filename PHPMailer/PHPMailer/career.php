<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

// Load Composer's autoloader
//require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$name = $_POST["name"]; 
$ph_no = $_POST["phone"];
$email = $_POST["email"];
$Lineofwork = $_POST["Lineofwork"];
$address = $_POST["address"];

$strSubject = "RESUME OF ".$name;  
echo $strSubject;
$strMessage = nl2br("Please find resume and Details of ".$name."\n NAME : ".$name."\n PHONE NUMBER : ".$ph_no."\n EMAIL : ".$email. " \n LINE OF WORK : " .$Lineofwork."\n ADDRESS : ".$address);  
  echo $$strMessage;
  
//*** Uniqid Session ***//  
$strSid = md5(uniqid(time()));  
  
$strHeader = "";  
$strHeader .= "From: dynak.web@gmail.com<dynak.web@gmail.com>\nReply-To: itsupport@dynakstamp.com";  
  
$strHeader .= "MIME-Version: 1.0\n";  
$strHeader .= "Content-Type: multipart/mixed; boundary=\"".$strSid."\"\n\n";  
$strHeader .= "This is a multi-part message in MIME format.\n";  
$strHeader .= "--".$strSid."\n";  
$strHeader .= "Content-type: text/html; charset=utf-8\n";  
$strHeader .= "Content-Transfer-Encoding: 7bit\n\n";  
$strHeader .= $strMessage."\n\n";  
  
//*** Attachment ***//  
if($_FILES["fileAttach"]["name"] != "")  
{  
$strFilesName = $_FILES["fileAttach"]["name"];  
$strContent = chunk_split(base64_encode(file_get_contents($_FILES["fileAttach"]["tmp_name"])));  
$strHeader .= "--".$strSid."\n";  
$strHeader .= "Content-Type: application/octet-stream; name=\"".$strFilesName."\"\n";  
$strHeader .= "Content-Transfer-Encoding: base64\n";  
$strHeader .= "Content-Disposition: attachment; filename=\"".$strFilesName."\"\n\n";  
$strHeader .= $strContent."\n\n";  
}

 $strTo = "itsupport@dynakstamp.com";
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
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'dynak.web@gmail.com';
$mail->Password = 'Dynak@1012';
$mail->SetFrom('dynak.web@gmail.com','RESUME');
$mail->Subject = $strSubject;
$mail->Body = 'Any HTML content';

$mail->AddAddress('itsupport@dynakstamp.com');

$result = $mail->Send();

if($result == 1){
    echo "OK Message";
}
else{
    echo "Sorry. Failure Message";
}



?>  
