<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Tatak Mamay</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    <div class="container">
    <?php include('nav.php'); ?>
    </div>

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/Product-1.png" width="100%" id="Producting">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/Product-pink.png" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/Product-1 back.png" width="100%" class="small-img">
                    </div>
                    <!-- <div class="small-img-col">
                        <img src="images/gallery-3.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-4.jpg" width="100%" class="small-img">
                    </div> -->
                </div>
            </div>
            <div class="col-2">
                <p>Home / T-shirt</p>
                <h1>Bini-Shirt (Pink)</h1>
                <h4>350.00</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add To Cart</a>
                <a href="" class="btn">Bulk Order</a>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>Elevate your wardrobe with our Bini Shirt in a vibrant pink! Made from lightweight, breathable material, this shirt offers both style and comfort. Its tailored fit and modern design make it a perfect choice for any occasion—dress it up for work or pair it with jeans for a relaxed weekend look. Brighten up your outfit with this eye-catching staple!</p>
            </div>
        </div>
    </div>

    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <a href="products.html">View More</a>
        </div>
    </div>

<div class="small-container">
    <div class="row">
        <div class="col-4">
            <img src="images/product-9.jpg">
            <h4>ROADSTER Unisex Watch</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹2790.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-10.jpg">
            <h4>HRX Sport Shoes</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹1250.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-11.jpg">
            <h4>REDTAPE shoes</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>₹1900.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-12.jpg">
            <h4>NIKE Jogger</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹1950.00</p>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <!-- <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div> -->
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
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2023 - Easy Tutorials</p>
    </div>
</div>

<script>
    var MenuItems=document.getElementById("MenuItems");

    MenuItems.style.maxHeight="0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight="0px"){
            MenuItems.style.maxHeight="200px";
        }
        else{
            MenuItems.style.maxHeight="0px";
        }
    }
</script>

<script>
    var Productimg=document.getElementById("Productimg");
    var Smallimg=document.getElementsByClassName("small-img");

    Smallimg[0].onclick=function(){
        Productimg.src=Smallimg[0].src;
    }
    Smallimg[1].onclick=function(){
        Productimg.src=Smallimg[1].src;
    }
    Smallimg[2].onclick=function(){
        Productimg.src=Smallimg[2].src;
    }
    Smallimg[3].onclick=function(){
        Productimg.src=Smallimg[3].src;
    }
</script>

    
</body>
</html>