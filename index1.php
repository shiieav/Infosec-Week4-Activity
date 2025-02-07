<?php
function sanitizeInput($data) {
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);
    $contact = sanitizeInput($_POST['contact']);
    $message = sanitizeInput($_POST['message']);

    echo "<div class='result'>";
    echo "<h3>Form Submitted Successfully!</h3>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Contact:</strong> " . $contact . "</p>";
    echo "<p><strong>Message:</strong> " . nl2br($message) . "</p>";
    echo "</div>";  
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <h2>Contact Form</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" placeholder="Name" name="name" required>
        
        <br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="Email" name="email" required>
        
        <br>
        
        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" placeholder="Contact Number" name="contact" required pattern="[0-9]{10}">
        
        <br>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Your message here..." required></textarea>
        
        <br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
