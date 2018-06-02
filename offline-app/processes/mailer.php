<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $data = $_POST["data"];
        $data = stripslashes($data);
        // echo $data;
        $email = 'ipad@fatbastardwine.co.za';
        // Check that data was sent to the mailer.
        if ( empty($data)) {
            // Set a 400 (bad request) response code and exit.
            header("HTTP/1.0 400 bad request");
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "ipad@fatbastardwine.co.za";

        // Set the email subject.
        $subject = "Fat Bastard Soweto Form";

        // Build the email content.
        $email_content = $data;

        // echo $email_content;
        // Build the email headers.
        $email_headers = "From: <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
          header("HTTP/1.0 200 Success");
            echo "Thank You! Your data has been submitted.";
        } else {
            // Set a 500 (internal server error) response code.
              header("HTTP/1.0 500 internal server error");
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        header("HTTP/1.0 403 forbidden");
        echo "There was a problem with your submission, please try again.";
    }

?>
