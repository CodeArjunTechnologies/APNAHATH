





<?php
//var_dump($_POST);
if(isset($_POST['submit']))
{
    // Retrieve form data
    $to = 'devrokeiya@gmail.com';
    $subject = 'Enquiry';
   
     $customer_name=$_POST['name'];
     $customer_email=$_POST['email'];
     $customer_phone=$_POST['phone'];
     $customer_subject=$_POST['subject'];
     $notes=$_POST['message'];
  

     $msg="Enquiry Name :   $customer_name . \n" .
           "Enquiry Email :  $customer_email . \n" .
            "Enquiry Subject :   $customer_subject . \n" .
            "Enquiry Phone :   $customer_phone . \n" .
             "Message :   $notes ";

    include('smtp/PHPMailerAutoload.php');
    echo smtp_mailer($to, $subject, $msg);
}

function smtp_mailer($to, $subject, $msg) {
    $mail = new PHPMailer();
    //$mail->SMTPDebug = 3; // Uncomment for debugging
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = "smtp.hostinger.com";
    $mail->Port = "465";
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "info@indiradentalcare.in";
    $mail->Password = 'IeW5UNQr[=2';
    $mail->SetFrom("info@indiradentalcare.in", "Dr. Soi Info");
    $mail->Subject = $subject;
    $mail->Body = nl2br(htmlspecialchars($msg)); // Sanitize message content
    $mail->AddAddress($to);
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        )
    );

    if (!$mail->Send()) {
        return "Mailer Error: " . $mail->ErrorInfo;
    } else {
        return "Email Sent Successfully!";
    }
}

$msg1="Thank you for reaching out to Apnahath! ";

echo smtp_mailer($customer_email, $subject, $msg1);


header("Location : contact.php");
?>


