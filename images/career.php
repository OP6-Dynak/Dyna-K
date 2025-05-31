<? 

require("smtp.php");

require("sasl.php");
 
 
$name = $_POST["name"]; 
$ph_no = $_POST["phone"];
$email = $_POST["email"];
$Lineofwork = $_POST["Lineofwork"];
$address = $_POST["address"];

$subject = "RESUME OF ".$name;  

$strMessage = nl2br("Please find resume and Details of ".$name."\n NAME : ".$name."\n PHONE NUMBER : ".$ph_no."\n EMAIL : ".$email. " \n LINE OF WORK : " .$Lineofwork."\n ADDRESS : ".$address);  
  
  
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

$from = "dynak.web@gmail.com";

/*
$flgSend = @mail($from,$strSubject,null,$strHeader);  // @ = No Show Error //  
  
if($flgSend)  
{  
echo "Mail send completed.";  
}  
else  
{  
echo "Cannot send mail.";  
}  
*/
$to = "itsupport@dynakstamp.com";
                          /* Change this to your address like "me@mydomain.com"; */ 
	$sender_line=__LINE__;
	
	if(strlen($from)==0)
		die("Please set the messages sender address in line ".$sender_line." of the script ".basename(__FILE__)."\n");
	if(strlen($to)==0)
		die("Please set the messages recipient address in line ".$recipient_line." of the script ".basename(__FILE__)."\n");

	$smtp=new smtp_class;

	$smtp->host_name="smtp.gmail.com"; //IP address       /* Change this variable to the address of the SMTP server to relay, like "smtp.myisp.com" */
	$smtp->host_port=465;                /* Change this variable to the port of the SMTP server to use, like 465 */
	$smtp->ssl=1;                       /* Change this variable if the SMTP server requires an secure connection using SSL */
	$smtp->start_tls=0;                 /* Change this variable if the SMTP server requires security by starting TLS during the connection */
	$smtp->localhost="localhost";       /* Your computer address */
	$smtp->direct_delivery=0;           /* Set to 1 to deliver directly to the recepient SMTP server */
	$smtp->timeout=10;                  /* Set to the number of seconds wait for a successful connection to the SMTP server */
	$smtp->data_timeout=0;              /* Set to the number seconds wait for sending or retrieving data from the SMTP server.
	                                       Set to 0 to use the same defined in the timeout variable */
	$smtp->debug=1;                     /* Set to 1 to output the communication with the SMTP server */
	$smtp->html_debug=1;                /* Set to 1 to format the debug output as HTML */
	$smtp->pop3_auth_host="";           /* Set to the POP3 authentication host if your SMTP server requires prior POP3 authentication */
	$smtp->user="dynak.web@gmail.com";                     /* Set to the user name if the server requires authetication */
	$smtp->realm="";                    /* Set to the authetication realm, usually the authentication user e-mail domain */
	$smtp->password="Dynak@1012";                 /* Set to the authetication password */
	$smtp->workstation="";              /* Workstation name for NTLM authentication */
	$smtp->authentication_mechanism=""; /* Specify a SASL authentication method like LOGIN, PLAIN, CRAM-MD5, NTLM, etc..
	                                       Leave it empty to make the class negotiate if necessary */



	if($smtp->SendMessage(
		$from,
		array(
			$to
		),
		array(
			"From: $from",
			"To: $to",
			"Subject: $subject",
			"Date: ".strftime("%a, %d %b %Y %H:%M:%S %Z")
		),
		"$strHeader"))
		{
		echo "Message sent to $to OK.\n"; 
		}
	else
		echo "Cound not send the message to $to.\nError: ".$smtp->error."\n";
?>  
