<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Tatak Mamay</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="header">
    <div class="container">
    <?php include('nav.php'); ?>
    </div>
</div>

<div class="small-container">
    <div class="row">
        <div class="col-2">
            <h1>About Tatak Mamay</h1>
            <p>Welcome to Tatak Mamay, your trusted brand for quality, comfort, and style. We are committed to providing custom-made sports and lifestyle apparel that reflects individuality and performance. Our products are designed to meet the dynamic needs of athletes, fitness enthusiasts, and anyone who believes in looking and feeling their best.</p>
           
            <p>Our journey began with a passion for excellence and a drive to create products that inspire confidence and action. With each piece, we aim to offer more than just clothing—we aim to offer empowerment. At Tatak Mamay, every stitch and every design element is crafted with precision, ensuring you get the best possible experience.</p>
        </div>
        <div class="col-2">
            <img src="images/Aboutimage.jpg" alt="About Tatak Mamay">
        </div>
    </div>
</div>

<div class="small-container">
    <h2 class="title">Our Mission</h2>
    <p>At Tatak Mamay, our mission is to bridge the gap between style and performance. We aim to provide apparel that not only enhances your physical activities but also boosts your confidence in every step of the way. We believe in building a community of empowered individuals who wear our brand as a symbol of their dedication, passion, and strength.</p>

    <h2 class="title">Why Choose Us?</h2>
    <div class="row">
        <div class="col-4">
            <i class="fa fa-thumbs-up"></i>
            <h4>Premium Quality</h4>
            <p>We use high-quality materials and cutting-edge technology to deliver products that last and perform.</p>
        </div>
        <div class="col-4">
            <i class="fa fa-cogs"></i>
            <h4>Innovative Design</h4>
            <p>Our designs are made to move with you—blending functionality with a modern, stylish look.</p>
        </div>
        <div class="col-4">
            <i class="fa fa-users"></i>
            <h4>Customer-Centric</h4>
            <p>We prioritize our customers, offering a seamless shopping experience and exceptional customer support.</p>
        </div>
    </div>
</div>

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

<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
        if (MenuItems.style.maxHeight === "0px") {
            MenuItems.style.maxHeight = "200px";
        } else {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>

</body>
</html>
