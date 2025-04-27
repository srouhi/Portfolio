<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = strip_tags(trim($_POST["name"]));
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $message = trim($_POST["message"]);

  //email settings
  $to = "Shaqayeq.shr9@gmail.com"; 
  $subject = "New Contact Message from $name";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  // Additional headers
  $headers = "From: $name <$email>";

  //send email
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message!";
  } else {
    echo "Oops! Something went wrong. Please try again.";
  }
}
?>
