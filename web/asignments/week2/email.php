<?php 

// https://stackoverflow.com/questions/18379238/send-email-with-php-from-html-form-on-submit-with-the-same-script
   

    $myEmail = "phi13025@byui.edu";      // My email
    $name = $_POST["name"];          // Sender name
    $email = $_POST["email"];        // Sender email
    $comment = $_POST["comment"];    // Sender comments
    $subject = "Assignment Homepage";

    // mail($myEmail,$subject,$comment,$email);
    // mail($email,$subject,$name,$myEmail); // Send copy to sender

    echo "And email was sent Shawn. Thank you " . $name;

   // header("Location: Assignment Homepage.html");
        
?>
