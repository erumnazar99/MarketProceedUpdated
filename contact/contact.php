<?php
    require "PHPMailer/PHPMailerAutoload.php";

    function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'mail.marketproceed.com';
        $mail->Port = 465;  
        $mail->Username = 'contact@marketproceed.com';
        $mail->Password = 'SodiumChloride';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From=$from;
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="false";
            header("Location: ../index.php?msg=".$error);
        }
        else 
        {
            $success = "true";
            header("Location: ../index.php?msg=".$success);
        }
    }
    
    $to   = 'contact@marketproceed.com';
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subj = $_POST['subject'];
    $msg = $_POST['message'];
    
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
?>