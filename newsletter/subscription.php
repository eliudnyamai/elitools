<?php 
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include_once 'config/Database.php';
include_once 'class/Subscribe.php';

$database = new Database();
$db = $database->getConnection();
$subscriber = new Subscribe($db);

if(isset($_POST['subscribe'])){ 
    $errorMsg = '';     
    $response = array( 
        'status' => 'err', 
        'msg' => 'Something went wrong, please try after some time.' 
    );     
    
    if(empty($_POST['name'])){ 
        $pre = !empty($msg)?'<br/>':''; 
        $errorMsg .= $pre.'Please enter your full name.'; 
    } 
	
    if(empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
        $pre = !empty($msg)?'<br/>':''; 
        $errorMsg .= $pre.'Please enter a valid email.'; 
    } 
         
    if(empty($errorMsg)){ 
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $verifyToken = md5(uniqid(mt_rand()));  
               
		$subscriber->email = $email;
        if($subscriber->getSusbscriber()){ 
            $response['msg'] = 'Your email already exists in our subscribers list.'; 
        } else {      
			
			$subscriber->name = $name;
			$subscriber->verify_token = $verifyToken;
			$insert = $subscriber->insert(); 
             
            if($insert){ 
			
				$siteName = 'Toolske.com - newsletter'; 
				$siteEmail = 'contact@webdamn.com'; 
                $verifyLink = 'toolske.com/newsletter/verify_subscription.php?email_verify='.$verifyToken; 
                $subject = 'Confirm Subscription'; 
                $message = '<h1 style="font-size:22px;margin:18px 0 0;padding:0;text-align:left;color:#3c7bb6">Email Confirmation</h1> 
                <p style="color:#616471;text-align:left;padding-top:15px;padding-right:40px;padding-bottom:30px;padding-left:40px;font-size:15px">Thank you for signing up with '.$siteName.'! Please confirm your email address by clicking the link below.</p> 
                <p style="text-align:center;"> 
                    <a href="'.$verifyLink.'" style="border-radius:.25em;background-color:#4582e8;font-weight:400;min-width:180px;font-size:16px;line-height:100%;padding-top:18px;padding-right:30px;padding-bottom:18px;padding-left:30px;color:#fffffftext-decoration:none">Confirm Email</a> 
                </p> 
                <br><p><strong>'.$siteName.' Team</strong></p>'; 
                 
                $headers = "MIME-Version: 1.0" . "\r\n";  
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";  
                $headers .= "From: $siteName"." <".$siteEmail.">"; 
//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'eliudmitau@gmail.com';                     //SMTP username
    $mail->Password   = 'rekjtkruhuzkakpf';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('eliudmitau@gmail.com', 'Mailer');
    $mail->addAddress($email, $name);     //Add a recipient
    $mail->addAddress($email);               //Name is optional
    $mail->addReplyTo('eliudmitau@gmail.com', 'Information');
    $mail->addCC('eliudmitau@gmail.com');



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send()){
        $response = array( 
            'status' => 'ok', 
            'msg' => 'A verification link has been sent to your email address, please check your email and verify.' 
        ); 
    }
   
} catch (Exception $e) {
    $response['msg'] = $e; 
}

            } 
        } 
    }       
    echo json_encode($response); 
} 
?>
