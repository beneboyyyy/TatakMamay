<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="styles/contact styles.css">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
  
    <div class="header">
        <div class="container">
        <?php include('nav.php'); ?>
            
        </div>
    </div>
  
  <!-- <div id="contact-header">
    <h1>Drop Us a Line</h1>
    <div class="link-lists">
      <ul class="link-list">
        <li><img src="img/location.svg" class="list-img"><a href="#">Kandy, Sri Lanka</a></li>
        <li><img src="img/mail.svg" class="list-img"><a href="#" >ots@gmail.com</a></li>
        <li><img src="img/call.svg" class="list-img"><a href="#">075 - 120 3402</a></li>
      </ul>
    </div>
  </div> -->

  <main>
    <section class="main-section">
      <div class="contact-form">
        <form method="POST" action="">
          <h2>Contact Us</h2>
          <label>Name</label>
          <input type="text" name="name" placeholder="Your Name">
          <label>Email</label>
          <input type="email" name="email" placeholder="Your Email">
          <label>Question</label>
          <textarea name="message" placeholder="Your Message"></textarea>
          <button type="submit">Submit</button>
        </form>
      </div>
      <div class="contact-image">
        <img src="images/logo_tm.png" alt="Contact Image">
      </div>
    </section>
  </main>

 
    <div class="footer">
        <div class="container">
            <div class="row">
                
                <div class="footer-col-2">
                    <img src="images/logo_tm.png">
                    <p>Our Purpose Is To Sustainably Make The Pleasure and Benefits of Sports Accesible to the Many. </p>
                </div>
                <!-- <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div> -->
                <!-- <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div> -->
            </div>
            <hr>
            <p class="copyright">Copyright 2024 - Tatak Mamay</p>
        </div>
    </div>

</body>
</html>