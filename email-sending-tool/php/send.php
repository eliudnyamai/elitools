<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
set_time_limit(0);                   // ignore php timeout
ignore_user_abort(true);
include '../Database.php';
//Fresh send
$query = "TRUNCATE TABLE failed_emails";
$pdo->exec($query);
$query = "TRUNCATE TABLE successfull_emails";
$pdo->exec($query);
$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();

if(isset($_POST['message_body'])){
    $message=$_POST["message_body"];
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$siteName = 'Test.com'; 
				$siteEmail = 'test.gmail.com'; 
                $subject = 'test';   
                $headers = "MIME-Version: 1.0" . "\r\n";  
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";  
                $headers .= "From: $siteName"." <".$siteEmail.">"; 
require '../vendor/autoload.php';
$mail = new PHPMailer(true);
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
    $mail->isSMTP();                                         
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'baltscandlv@gmail.com';                    
    $mail->Password   = 'uufvjiewfvawwiyj';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;                                    
    $mail->setFrom('baltscandlv@gmail.com', 'Dilans');
    $mail->addReplyTo('baltscandlv@gmail.com', 'Information');
    $mail->addCC('eliudmitau@gmail.com');
    $mail->SMTPKeepAlive = true; 
    $mail->isHTML(true);                                  
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$index=0;
$no_of_rows=count($result);
foreach ($result as $row) {
    try {
        $mail->addAddress($row['email'], $row['name']);
    } catch (Exception $e) {
        $err="INVALID ADDRESS";
        $stmt = $pdo->prepare("INSERT INTO  failed_emails (name, email,error) VALUES (:name, :email, :error)");
        $stmt->bindParam(':name', $row['name']);
        $stmt->bindParam(':email', $row['email']);
        $stmt->bindParam(':error', $err);
        $stmt->execute();
        continue;
    }
    if (!empty($row['pdf'])) {
        $mail->addStringAttachment($row['pdf'], $row['name'].'.pdf');
    }else{
        $err="NO PDF";
        $stmt = $pdo->prepare("INSERT INTO  failed_emails (name, email,error) VALUES (:name, :email, :error)");
        $stmt->bindParam(':name', $row['name']);
        $stmt->bindParam(':email', $row['email']);
        $stmt->bindParam(':error', $err);
        $stmt->execute();
        continue;
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