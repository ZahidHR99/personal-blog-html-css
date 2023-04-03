<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Contact Page</title>
</head>
<body>

    <header>
        <div class="logo">
          <img src="img/logo.png" alt="My Blog">
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </header>
      
      <section class="contact-form">
        <h1>Contact Us</h1>
        <form action="contact.php" method="post">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required>
      
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
      
          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" required>
      
          <label for="message">Message</label>
          <textarea id="message" name="message" required></textarea>
      
          <button type="submit" name="submit">Submit</button>
        </form>
      </section>
      
<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "zahidhr99@gmail.com";
  $headers = "From: " . $name . " <" . $email . ">\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  $headers .= "Content-Type: text/html\r\n";

  $body = "<h2>Contact Request</h2>";
  $body .= "<p><strong>Name:</strong> " . $name . "</p>";
  $body .= "<p><strong>Email:</strong> " . $email . "</p>";
  $body .= "<p><strong>Subject:</strong> " . $subject . "</p>";
  $body .= "<p><strong>Message:</strong> " . $message . "</p>";

  if (mail($to, $subject, $body, $headers)) {
    echo "<p>Thank you for contacting us, " . $name . ". We will get back to you soon!</p>";
  } else {
    echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
  }
}
?>

</body>
</html>