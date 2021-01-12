<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';

  // Include autoload.php file
  require 'vendor/autoload.php';
  // Create object of PHPMailer class
  $mail = new PHPMailer(true);

  $output = '';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    // $Mobile = $_POST['Mobile'];
     $message = $_POST['message'];

    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'rafficmani1998@gmail.com';
      // Gmail Password
      $mail->Password = '7868832929';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom('rafficmani1998@gmail.com');
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('shinestudentcare@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = 'Request Submission';
      $mail->Body = "<h3>Name : $name <br>Phone : $contact <br>Email : $email <br></h3>";

      $mail->send();
      $output = '<div class="alert alert-success">
                  <h5>Thankyou! for contacting us, We\'ll get back to you soon!</h5>
                </div>';
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="contact-page">
    <h2>Get in touch</h2>
    <div class="contact-info">
      <div class="item">
        <i class="icon fas fa-home"></i>
        New York, United States
      </div>
      <div class="item">
        <i class="icon fas fa-phone"></i>
        +0 000 0000000
      </div>
      <div class="item">
        <i class="icon fas fa-envelope"></i>
        email@address.com
      </div>
      <div class="item">
        <i class="icon fas fa-clock"></i>
        Mon - Fri 8:00 AM to 6:00 PM
      </div>
    </div>
    <form action="" class="contact-form" method="POST">
    <?php echo $output; ?>
      <input type="text" class="textb" placeholder="Your Name" name="name">
      <input type="text" class="textb" placeholder="Mobile number" name="contact">
      <input type="email" class="textb" placeholder="Your Email" name="email">
      <input type="text" class="textb" placeholder="Subject" name="subject">
      <textarea placeholder="Your Message" name="message"></textarea>
      <input type="submit" class="btn" value='Send' name="submit">
    </form>
  </div>
</body>
</html>