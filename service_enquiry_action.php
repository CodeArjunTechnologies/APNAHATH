<?php
if(isset($_POST['submit'])) {
    $to = 'devrokeiya@gmail.com';
    $subject = 'Service Enquiry';

    $service_name = htmlspecialchars(trim($_POST['service_name']));
    $customer_name = htmlspecialchars(trim($_POST['name']));
    $customer_email = htmlspecialchars(trim($_POST['email']));
    $customer_phone = htmlspecialchars(trim($_POST['phone']));
    $customer_address = htmlspecialchars(trim($_POST['address']));
    $notes = htmlspecialchars(trim($_POST['message']));

    if(!filter_var($customer_email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email!";
        exit;
    }

    $msg = "You have received a new service enquiry.\n\n" .
           "Service Name: $service_name\n" .
           "Customer Name: $customer_name\n" .
           "Email: $customer_email\n" .
           "Phone: $customer_phone\n" .
           "Address: $customer_address\n" .
           "Message:\n$notes\n";

    include('smtp/PHPMailerAutoload.php');

    // Send to admin
    echo smtp_mailer($to, $subject, $msg);

    // Send acknowledgement to customer
    $msg1 = "Thank you for reaching out to Apnahath!";
    echo smtp_mailer($customer_email, $subject, $msg1);

    header("Location: service.php");
    exit;
}

function smtp_mailer($to, $subject, $msg) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = "smtp.hostinger.com";
    $mail->Port = 465;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "info@indiradentalcare.in";
    $mail->Password = 'IeW5UNQr[=2';
    $mail->SetFrom("info@indiradentalcare.in", "Dr. Soi Info");
    $mail->Subject = $subject;
    $mail->Body = nl2br($msg);
    $mail->AddAddress($to);
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        ]
    ];

    return $mail->Send() ? "Email Sent Successfully!" : "Mailer Error: " . $mail->ErrorInfo;
}
?>
