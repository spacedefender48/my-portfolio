<?php 
    $name = $_POST['f_name'];
    $from_email = $_POST['f_email'];
    $subject = $_POST['f_subject'];
    $body = $_POST['f_message'];
    $to_email = 'spacedefender48@gmail.com';

    // Test functions and send data back to JS. Comment the rest 
    $result = "The sender's email is: " . $from_email;
    echo json_encode($result);

    // WordPress functions
    // Set sender email
    apply_filters( 'wp_mail_from', $from_email);
    
    // Send email to recipient
    wp_mail($to_email, $subject, $body, $headers);
?>