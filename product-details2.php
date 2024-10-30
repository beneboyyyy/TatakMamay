<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - Tatak Mamay</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .product-details {
            background: #333; /* Dark background for product details */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            max-width: 800px;
            margin: auto;
        }
        .product-details img {
            max-width: 100%;
            border-radius: 5px;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .col-2 {
            flex-basis: 45%; /* Set fixed width for the column */
            min-width: 300px; /* Minimum width for responsiveness */
            margin: 10px; /* Add margin for spacing */
        }
        .order-options, .quantity, .total {
            margin: 15px 0;
            color: #fff; /* White text for visibility */
        }
        button {
            padding: 10px 15px;
            background-color: #ff523b; /* Accent color for button */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #563434; /* Darker shade on hover */
        }
        .footer {
            background: #222; /* Darker footer background */
            color: #8a8a8a;
            font-size: 14px;
            padding: 60px 0 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="container">
    <?php include('nav.php'); ?>
        <div class="navbar">
            
        </div>
    </div>
</div>

<div class="small-container product-details">
    <div class="row">
        <div class="col-2">
            <img src="images/Product-1.png" id="productImage">
        </div>
        <div class="col-2">
            <h1 style="color: #f50ca0">Bini-Shirt</h1>
            <p style="color: #e0e0e0;">Price: <span id="productPrice">$350.00</span></p>
            <p style="color: #e0e0e0;">This shirt is made from high-quality fabric and is designed for comfort and style.</p>

            <div class="order-options">
                <label for="orderType" style="color: #fff;">Choose Order Type:</label>
                <select id="orderType" onchange="updateOrderType()" style="background: #333; color: white; border: 1px solid #ff523b;">
                    <option value="single">Single Order</option>
                    <option value="bulk">Bulk Order</select>
                </select>
            </div>

            <div class="quantity">
                <label for="quantity" style="color: #fff;">Quantity:</label>
                <input type="number" id="quantity" value="1" min="1" onchange="calculateTotal()" style="width: 50px; height: 40px; padding-left:  10px; font-size: 20px; margin-right: 10px; border: 1px solid #ff523b;">
            </div>

            <div class="total">
                <p id="totalPrice" style="color: #fff;">Total Price: $350.00</p>
            </div>

            <button onclick="placeOrder()">Place Order</button>
        </div>
    </div>
</div>

<div class="footer">
    <p style="color: #ddd;">Our Purpose Is To Sustainably Make The Pleasure and Benefits of Sports Accessible to the Many.</p>
    <p style="color: #ddd;">Copyright  2024 - Tatak Mamay</p>
</div>

<script>
    const pricePerUnit = 350.00;
    let orderType = 'single';

    function updateOrderType() {
        orderType = document.getElementById('orderType').value;
        if (orderType === 'bulk') {
            window.location.href = 'bulkOrder.php'; // Redirect to bulk order form
        } else {
            calculateTotal();
        }
    }

    function placeOrder() {
        const quantity = document.getElementById('quantity').value;
        alert(`Order placed for ${quantity} item(s) as a ${orderType} order.`);
    }

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