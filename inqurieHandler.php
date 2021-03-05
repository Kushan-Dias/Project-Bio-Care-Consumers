<?php
    $firstName=$_POST['FirstName'];
    $lastName=$_POST['LastName'];
    $email=$_POST['Email'];
    $telephone=$_POST['Telephone'];
    $address=$_POST['Address'];
    $city=$_POST['City'];
    $state=$_POST['State'];
    $country=$_POST['Country'];
    $product=$_POST['Product'];
    $product1=$_POST['Product1'];
    $product2=$_POST['Product2'];
    $product3=$_POST['Product3'];
    $product4=$_POST['Product4'];
    $product5=$_POST['Product5'];
    $product6=$_POST['Product6'];
    $quantity=$_POST['Quantity'];
    $quantity1=$_POST['Quantity1'];
    $quantity2=$_POST['Quantity2'];
    $quantity3=$_POST['Quantity3'];
    $quantity4=$_POST['Quantity4'];
    $quantity5=$_POST['Quantity5'];
    $quantity6=$_POST['Quantity6'];
    $orderNote=$_POST['Order'];

    $email_from='dns70.lankahost.net';

    $email_subject="Ordering Form";

    $email_body="First Name: $firstName.\n".
                    "Last Name: $lastName.\n".
                        "User Email: $email\n".
                            "Telephone: $telephone.\n".
                                "Address: $address.\n".
                                    "City: $city.\n".
                                        "State/Province: $state.\n".
                                            "Country: $country.\n".
                                                "                                                            Product            Quantity : \n
                                               1.  $product  - $quantity \n        
                                               2.  $product1 - $quantity1 \n
                                               3.  $product2 - $quantity2 \n
                                               4.  $product3 - $quantity3 \n
                                               5.  $product4 - $quantity4 \n
                                               6.  $product5 - $quantity5 \n
                                               7.  $product6 - $quantity6 \n".
                                                                       "\n".   
        
                                                        "Order Note: $orderNote.\n";

    $to="info@activealoebiocare.com";
    $headers="From: $email_from \r\n";
    $headers="Reply-To: $email \r\n" ;

    mail($to,$email_subject,$email_body,$headers);
    header("Location: inqurie.html");

?>