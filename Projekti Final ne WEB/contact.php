<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Contact</title>
    <link rel="stylesheet" href="CSS/contactStyle.css">
    <link rel="icon" href="CSS/Image/Contact.png">
    <script src="JS/contact.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <header>
    <nav>
      <ul>
        <li class="logo">F&M</li>
        <li class="items"><a href="index.php">Home</a></li>
        <li class="items"><a href="industries.php">Industries</a></li>
        <li class="items"><a href="service.php">Services</a></li>
        <li class="items"><a href="contact.php">Contact</a></li>
        <li class="items"><a href="about.php">About Us</a></li>
        <li class="items"><a href="login.php">Log Out</a></li>
        <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
      </ul>
    </nav>

    <script>
      $(document).ready(function(){
        $('.btn').click(function(){
          $('.items').toggleClass("show");
          $('ul li').toggleClass("hide");
        });
      });
    </script>
</header>

  <section id="contact-form" class="y-1">
    <div class="container">
      <h1 class="titulli">Contact Us</h1>
      <p>Send Us A Message</p>
      
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" id="message" required></textarea> 
        </div>
        <button type="submit" class="button" onclick="send()">Send</button>
    </div>
  </section>
  
  <section id="contact-info" class="informata">
    <div class="container">
        <div class="box">
            <i class="fas fa-hotel fa-3x"></i>
            <h3>Location</h3>
            <p>Lagjja Kalabria,10000 Prishtine, Kosovo</p>
          </div>
          <div class="box">
              <i class="fas fa-phone fa-3x"></i>
            <h3>Phone Number</h3>
            <p>+383 38 541 400</p>
          </div>
          <div class="box">
              <i class="fas fa-envelope fa-3x"></i>
            <h3>Email Address</h3>
            <p>shki@ubt-uni.net</p>
          </div>
    </div>
  </section>

  <footer id="main-footer">
    <p>Finance & Management &copy; 2021, All Rights Reserved</p>
  </footer>
</body>
</html> 
      