<?php

session_start();
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["contactName"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["contactEmail"]), FILTER_SANITIZE_EMAIL);
        $phone = trim ($_POST["contactPhone"]);
        $message = trim($_POST["contactMsg"]);
        
        date_default_timezone_set('America/Chicago');
          $submitTimestamp = date("M j, Y H:i:s");
          $formSubmitTime = date("g:i:s A");
          $formSubmitDate = date("m/d/Y");

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            $emailStatus = "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        $recipient = "nicki.intensitee@gmail.com";

        // Set the email subject.
        $subject = "New contact from $name, via website";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Phone: $phone\n\n";
        $email_content .= "Message:\n$message\n";
        $email_content .= "Submitted: $formSubmitTime on $formSubmitDate";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            $_SESSION['emailStatus'] = "Thank You! \nYour message has been sent.";
            
            
require('index.php');
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            $_SESSION['emailStatus'] = "Oops! Something went wrong and we couldn't send your message.";
            
            
require('index.php');
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        $_SESSION['emailStatus'] = "There was a problem with your submission, please try again.";
        
        
require('index.php');
    }


?>