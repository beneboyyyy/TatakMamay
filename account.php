<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Tatak Mamay</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <?php include('nav.php'); ?>
    </div>
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/image1.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <hr id="Indicator">
                        </div>
                        <form id="Loginform" style="display: block;">
                            <input type="text" placeholder="Username" required>
                            <input type="password" placeholder="Password" required>
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forgot Password</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-2">
                    <img src="images/logo_tm.png">
                    <p>Our Purpose Is To Sustainably Make The Pleasure and Benefits of Sports Accessible to the Many.</p>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2024 - Tatak Mamay</p>
        </div>
    </div>

    <script>
        var Loginform = document.getElementById("Loginform");
        var Indicator = document.getElementById("Indicator");

        function login() {
            Loginform.style.display = "block"; // Show login form
            Indicator.style.transform = "translateX(0px)"; // Move indicator to login
        }
    </script>
</body>
</html>