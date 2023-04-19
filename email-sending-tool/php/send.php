<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include '../Database.php';
//Fresh send
$query = "TRUNCATE TABLE failed_emails";
$pdo->exec($query);
$query = "TRUNCATE TABLE successfull_emails";
$pdo->exec($query);
$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
require '../vendor/autoload.php';
$mail = new PHPMailer(true);
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
    $mail->isSMTP();                                         
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'eliudmitau@gmail.com';                    
    $mail->Password   = 'rekjtkruhuzkakpf';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;                                    
    $mail->setFrom('eliudmitau@gmail.com', 'Dilans');
    $mail->addReplyTo('eliudmitau@gmail.com', 'Information');
    $mail->addCC('eliudmitau@gmail.com');
    $mail->SMTPKeepAlive = true; 
    $mail->isHTML(true);                                  
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

foreach ($result as $row) {
    try {
        $mail->addAddress($row['email'], $row['name']);
    } catch (Exception $e) {
        $stmt = $pdo->prepare("INSERT INTO  failed_emails (name, email,error) VALUES (:name, :email, :error)");
        $stmt->bindParam(':name', $row['name']);
        $stmt->bindParam(':email', $row['email']);
        $stmt->bindParam(':error', 'Invalid address');
        $stmt->execute();
        continue;
    }
    if (!empty($row['pdf'])) {
        $mail->addStringAttachment($row['pdf'], $row['name'].'.pdf');
    }

    try {
        $mail->send();
        $stmt = $pdo->prepare("INSERT INTO successfull_emails (name, email) VALUES (:name, :email)");
        $stmt->bindParam(':name', $row['name']);
        $stmt->bindParam(':email', $row['email']);
        $stmt->execute();
    } catch (Exception $e) {
        $stmt = $pdo->prepare("INSERT INTO  failed_emails (name, email,error) VALUES (:name, :email, :error)");
        $stmt->bindParam(':name', $row['name']);
        $stmt->bindParam(':email', $row['email']);
        $stmt->bindParam(':error', $mail->ErrorInfo);
        $stmt->execute();
        $mail->getSMTPInstance()->reset();
    }
    $mail->clearAddresses();
    $mail->clearAttachments();
}       
echo json_encode('Task  Complete'); 
?>