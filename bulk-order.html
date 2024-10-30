<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulk Order - Tatak Mamay</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #212529;
            color: white;
        }
        .form-container {
            background: #333;
            padding: 20px;
            border-radius: 5px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .form-container input, .form-container select {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ff523b;
            background: #444;
            color: white;
        }
        button {
            padding: 10px 15px;
            background-color: #ff523b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #563434;
        }
        .message {
            color: green;
            margin-top: 10px;
            display: none; /* Hidden by default */
        }
    </style>
</head>
<body>

<div class="form-container" id="registrationContainer">
    <h2>Registration Form</h2>
    <label for="username">Username:</label>
    <input type="text" id="username" placeholder="Enter username" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" placeholder="Enter email" required>
    
    <label for="password">Password:</label>
    <input type="password" id="password" placeholder="Enter password" required>
    
    <button onclick="registerUser ()">Sign Up</button>
</div>

<div class="form-container" id="bulkOrderContainer" style="display: none;">
    <h2>Bulk Order Form</h2>
    <label for="companyName">Company Name:</label>
    <input type="text" id="companyName" placeholder="Enter company name">
    
    <label for="serviceOption">Service Option:</label>
    <select id="serviceOption">
        <option value="polo">Polo</option>
        <option value="jersey">Jersey</option>
        <!-- Add more options as needed -->
    </select>
    
    <label for="releaseDate">Release Date:</label>
    <input type="date" id="releaseDate">
    
    <label for="totalQuantity">Total Quantity:</label>
    <input type="number" id="totalQuantity" value="1" min="1">
    
    <label for="numMales">Number of Males:</label>
    <input type="number" id="numMales" value="1" min="1">
    
    <label for="numFemales">Number of Females:</label>
    <input type="number" id="numFemales" value="1" min="1">
    
    <label for="maleSizes">Male Sizes:</label>
    <select id="maleSizes" multiple>
        <option value="XS">XS</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <!-- Add more options as needed -->
    </select>
    
    <label for="femaleSizes">Female Sizes:</label >
    <select id="femaleSizes" multiple>
        <option value="XS">XS</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <!-- Add more options as needed -->
    </select>
    
    <button onclick="calculateBulkOrder()">Calculate Bulk Order</button>
    <p id="bulkOrderTotal" style="color: #fff;"></p>
    <button onclick="placeOrder()">Place Order</button>
    <p class="message" id="orderConfirmationMessage">Order successfully added to your profile and is awaiting admin confirmation!</p>
</div>

<script>
    let userProfile = {}; // Object to store user profile data
    let userOrder = {}; // Object to store user order data

    function registerUser () {
        const username = document.getElementById('username').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        if (username && email && password) {
            // Save user data to the profile
            userProfile = { username, email, password };
            alert("Registration successful!");

            // Show the bulk order container
            document.getElementById('registrationContainer').style.display = 'none';
            document.getElementById('bulkOrderContainer').style.display = 'block';
        } else {
            alert("Please fill out all required fields.");
        }
    }

    const pricePerUnit = 350.00;

    function calculateBulkOrder() {
        const totalQuantity = document.getElementById('totalQuantity').value;
        const numMales = document.getElementById('numMales').value;
        const numFemales = document.getElementById('numFemales').value;
        const maleSizes = document.getElementById('maleSizes').selectedOptions;
        const femaleSizes = document.getElementById('femaleSizes').selectedOptions;

        let maleSizeCount = {};
        let femaleSizeCount = {};

        for (let i = 0; i < maleSizes.length; i++) {
            const size = maleSizes[i].value;
            maleSizeCount[size] = (maleSizeCount[size] || 0) + 1;
        }

        for (let i = 0; i < femaleSizes.length; i++) {
            const size = femaleSizes[i].value;
            femaleSizeCount[size] = (femaleSizeCount[size] || 0) + 1;
        }

        let totalPrice = 0;

        for (const size in maleSizeCount) {
            totalPrice += maleSizeCount[size] * pricePerUnit;
        }

        for (const size in femaleSizeCount) {
            totalPrice += femaleSizeCount[size] * pricePerUnit;
        }

        totalPrice *= 0.9; // 10% discount for bulk orders

        document.getElementById('bulkOrderTotal').innerHTML = `Total Price for Bulk Order: $${totalPrice.toFixed(2)}`;
    }

    function placeOrder() {
        const companyName = document.getElementById('companyName').value;
        const serviceOption = document.getElementById('serviceOption').value;
        const releaseDate = document.getElementById('releaseDate').value;
        const totalQuantity = document.getElementById('totalQuantity').value;
        const numMales = document.getElementById('numMales').value;
        const numFemales = document.getElementById('numFemales').value;
        const maleSizes = document.getElementById('maleSizes').selectedOptions;
        const femaleSizes = document.getElementById('femaleSizes').selectedOptions;

        userOrder = {
            companyName,
            serviceOption,
            releaseDate,
            totalQuantity,
            numMales,
            numFemales,
            maleSizes,
            femaleSizes
        };

        document.getElementById('orderConfirmationMessage').style.display = 'block';
    }
</script>

</body>
</html>