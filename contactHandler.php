<?php
    $firstName=$_POST['FirstName'];
    $lastName=$_POST['LastName'];
    $visitorEmail=$_POST['Email'];
    $subject=$_POST['Subject'];
    $message=$_POST['Message'];

    $email_from='dns70.lankahost.net';

    $email_subject="New Form Submission";

    $email_body="First Name: $firstName.\n".
                    "Last Name: $lastName.\n".
                        "User Email: $visitorEmail.\n".
                            "Subject of this message: $subject.\n".
                                "Message: $message.\n";

    $to="info@activealoebiocare.com";
    $headers="From: $email_from \r\n";
    $headers="Reply-To: $visitorEmail \r\n" ;

    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");

?>