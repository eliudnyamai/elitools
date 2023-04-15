<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include '../Database.php';
$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
				$siteName = 'Test.com'; 
				$siteEmail = 'test.gmail.com'; 
                $subject = 'test'; 
                $message = '<h1 style="font-size:22px;margin:18px 0 0;padding:0;text-align:left;color:#3c7bb6">Email Confirmation</h1> 
                <p style="color:#616471;text-align:left;padding-top:15px;padding-right:40px;padding-bottom:30px;padding-left:40px;font-size:15px">Email from'.$siteName.'</p> 
                <p style="text-align:center;"> 
                Test
                </p> 
                <br><p><strong>'.$siteName.' T</strong></p>'; 
                 
                $headers = "MIME-Version: 1.0" . "\r\n";  
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";  
                $headers .= "From: $siteName"." <".$siteEmail.">"; 
//Load Composer's autoloader
require '../../vendor/autoload.php';

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
    $mail->setFrom('eliudmitau@gmail.com', 'Dilans');
    $mail->addAddress($row['email'], $row['name']);     //Add a recipient
    $mail->addAddress($row['email']);               //Name is optional
    $mail->addReplyTo('eliudmitau@gmail.com', 'Information');
    $mail->AddAttachment($row['pdf'], $row['pdf']);
    $mail->addCC('eliudmitau@gmail.com');



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send()){
        $response = array( 
            'status' => 'ok', 
            'msg' => 'Messages sent.' 
        ); 
    }
   
} catch (Exception $e) {
    $response['msg'] = $e; 
}
} 
echo json_encode($response); 
              
?>