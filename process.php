<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $sub = $_POST["subject"];
    $message = $_POST["message"];
    
    $to = "your_email"; // Change this to your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    
    $mailBody = "Name: $name\n";
    $mailBody .= "Phone Number:\n$phone";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Subject:\n$sub";
    $mailBody .= "Message:\n$message";

 
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Error sending the message. Please try again later.";
    }
}

 // ... send email code here ...
    
    // Insert data into the database
    $servername = "your_servername";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO contact_form (name, phone, email, subject, message) VALUES ('$name', '$phone', '$email', '$sub', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your message!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();


?>