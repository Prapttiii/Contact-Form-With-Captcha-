<?php
//TESTING (returns true every time)
// Site key: 6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI
// Secret key: 6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe

$captcha = $_POST["captcha"]; //response data
$secret = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe"; //your recaptcha secret

//Recaptcha verification and JSON response decode
$verify = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha), true);

//Value of json key "success"
$success = $verify["success"];

$name = stripslashes($_POST["name"]);
$email = stripslashes($_POST["email"]);
$subject = stripslashes($_POST["subject"]);
$message = stripslashes($_POST["message"]);

$headers = "From: " . $email . "\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

if ($success == false) {
  //This user was not verified by recaptcha.
  echo "Recaptcha Verification Failed";
} else if ($success == true) {
    //This user is verified by recaptcha
    // send email
    //change email@email.com to your desired recipient
    if (mail("email@email.com", $subject, $Body, $headers)){
      //send successful
      echo "Recaptcha Success, Mail Sent Successfully";
    }else{
      //send failure
        echo "Mailing Failed";
      }
}

?>