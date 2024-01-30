<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>



  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

 

<nav class="navbar navbar-area navbar-expand-lg nav-style-01">
    <div class="container nav-container">
        <div class="responsive-mobile-menu">
            <div class="logo-wrapper mobile-logo">
                <a href="index.php" class="logo">
                    <img src="assets/img/logo.png" alt="logo">
                </a>
            </div>
            <div class="nav-right-content">
                <ul>
                    <li class="search">
                        <i class="ti-search"></i>
                    </li>
                    <li class="cart" >
                    <div class="cart"><i class="las la-shopping-cart"></i></div>
                        <div class="widget_shopping_cart_content">
                            <ul>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/img/checkout/7.png" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <a class="title" href="#">Smart watch red color</a>
                                            <p>Quantity: 1</p>
                                            <span class="price">$150.00</span>
                                        </div>
                                    </div>
                                    <a class="remove-product" href="#"><span class="ti-close"></span></a>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/img/checkout/8.png" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <a class="title" href="#">Smart watch red color</a>
                                            <p>Quantity: 1</p>
                                            <span class="price">$150.00</span>
                                        </div>
                                    </div>
                                    <a class="remove-product" href="#"><span class="ti-close"></span></a>
                                </li>
                            </ul>
                            <p class="total">
                                <strong>Subtotal:</strong> 
                                <span class="amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>129.00
                                </span>       
                            </p>
                            <p class="buttons">
                                <a href="checkout.html" class="button">View Card & Check out</a>
                            </p>
                        </div>
                    </li>
                    <li class="">
                 
                 <a class="login-btn" href="login.php"><i class="fa-solid fa-right-to-bracket"></i></a>
              
             </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Riyaqas_main_menu" 
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="Riyaqas_main_menu">
            <div class="logo-wrapper desktop-logo">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="logo">
                </a>
            </div>
            <ul class="navbar-nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a class="activee" href="about.php">About</a>
                </li>
                <li>
                    <a href="service.php">Services</a>
                </li>
                <!-- <li class="menu-item-has-children">
                    <a href="#">Career</a>
                    <ul class="sub-menu">
                        <li><a href="job-listing.html">Job listing</a></li>
                        <li><a href="job-details.html">Job Details</a></li>
                        <li><a href="job-apply.html">Job Apply</a></li>
                    </ul>
                </li> -->
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                <a href="prices.php">Prices</a>
                </li>
            </ul>
        </div>
        <div class="nav-right-content">
            <ul>
                <li class="search">
                    <i class="ti-search"></i>
                </li>
                <li class="cart" >
                    <div class="cart"><i class="las la-shopping-cart"></i></div>
                    <div class="widget_shopping_cart">
<div class="widget_shopping_cart_content" id="cart-content">
    <div class="cart-content">
        <ul id="cart-items-list">
            <!-- Cart items will be displayed here -->
        </ul>
        <div class="cart-total">
            <p class="total" id="cart-total">
                <strong>Subtotal:</strong>
                <span class="amount">$0.00</span>
            </p>
        </div>
    </div>
    <p class="buttons">
        <a href="checkout.php" class="button">View Cart & Checkout</a>
    </p>
    <p class="buttons">
        <a href="#" class="button" id="empty-cart-button">Empty Cart</a>
    </p>
</div>

</div>


                </li>
                <li class="">
                 
                    <a class="login-btn" href="login.php"><i class="fa-solid fa-right-to-bracket"></i></a>
                 
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Include your other JavaScript imports first, if any -->

<!-- <script>
document.addEventListener("DOMContentLoaded", function () {
    const cartContent = document.getElementById("cart-content");
    const cartItemsList = document.getElementById("cart-items-list");
    const cartTotal = document.getElementById("cart-total");
    const emptyCartButton = document.getElementById("empty-cart-button");

    const shoppingCart = {
        items: [], // This array will store the cart items
        currencySymbol: "$", // Replace with the desired currency symbol
    };

    // Function to update the shopping cart subtotal
    function updateCartSubtotal() {
        let subtotal = 0;

        // Calculate the subtotal based on the items in the shopping cart
        for (const item of shoppingCart.items) {
            subtotal += item.quantity * item.price;
        }

        cartTotal.querySelector(".amount").textContent = `${shoppingCart.currencySymbol}${subtotal.toFixed(2)}`;
    }

    // Function to render cart items
    function renderCartItems() {
        cartItemsList.innerHTML = ""; // Clear the existing cart items

        for (const item of shoppingCart.items) {
            const cartItem = document.createElement("li");
            cartItem.innerHTML = `
                <div class="media">
                    <div class="media-left">
                        <img src="${item.image}" alt="Product Image">
                    </div>
                    <div class="media-body">
                        <a class="title" href="#">${item.title}</a>
                        <p>Quantity: ${item.quantity}</p>
                        <span class="price">${shoppingCart.currencySymbol}${(item.quantity * item.price).toFixed(2)}</span>
                    </div>
                    <a href="#" class="remove-product" data-title="${item.title}"><span class="ti-close"></span></a>
                </div>
            `;

            cartItemsList.appendChild(cartItem);
        }
    }

    // Function to add an item to the shopping cart
    function addToCart(title, price, image) {
        const existingItem = shoppingCart.items.find((item) => item.title === title);

        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            shoppingCart.items.push({ title, price, image, quantity: 1 });
        }

        renderCartItems();
        updateCartSubtotal();

        // Make an AJAX request to addToCart.php to save the item to the database
        const xhrDatabase = new XMLHttpRequest();
        xhrDatabase.open("POST", "addToCart.php", true);
        xhrDatabase.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhrDatabase.onreadystatechange = function() {
            if (xhrDatabase.readyState === 4 && xhrDatabase.status === 200) {
                // Handle the response if needed
            }
        };

        // Prepare the data to send to the server
        const data = new FormData();
        data.append("title", title);
        data.append("price", price);
        data.append("image", image);

        // Send the request
        xhrDatabase.send(data);
    }

    // Function to remove an item from the shopping cart
    function removeItemFromCart(title) {
        const itemIndex = shoppingCart.items.findIndex((item) => item.title === title);
        if (itemIndex !== -1) {
            shoppingCart.items.splice(itemIndex, 1);
            renderCartItems();
            updateCartSubtotal();
        }
    }

    // Add click event listeners to "Remove" buttons
    const removeItemButtons = cartItemsList.querySelectorAll(".remove-product");
    removeItemButtons.forEach((button) => {
        button.addEventListener("click", (event) => {
            event.preventDefault();
            const title = event.target.getAttribute("data-title");
            removeItemFromCart(title);
        });
    });

    // Add click event listeners to "Add To Cart" buttons
    const addToCartButtons = document.querySelectorAll(".single-pricing .btn");
    addToCartButtons.forEach((button) => {
        button.addEventListener("click", (event) => {
            event.preventDefault();
            const pricingSection = event.target.closest(".single-pricing");
            const title = pricingSection.querySelector(".title").textContent;
            const price = parseFloat(pricingSection.querySelector(".price").textContent.replace("$", ""));
            const image = pricingSection.querySelector("img").src;

            addToCart(title, price, image);
        });
    });

    // Add click event listener to the "Empty Cart" button
    emptyCartButton.addEventListener("click", () => {
        shoppingCart.items = []; // Clear the shopping cart
        renderCartItems();
        updateCartSubtotal();
    });

    // Fetch cart items from the database and update the widget_shopping_cart
    const xhrGetCart = new XMLHttpRequest();
    xhrGetCart.open("GET", "getCartItems.php", true);
    xhrGetCart.onreadystatechange = function() {
        if (xhrGetCart.readyState === 4 && xhrGetCart.status === 200) {
            const cartItems = JSON.parse(xhrGetCart.responseText);
            // Update the widget_shopping_cart based on the retrieved cart items
                       if (cartItems.length > 0) {
                shoppingCart.items = cartItems;
                renderCartItems();
                updateCartSubtotal();
            }
        }
    };

    // Send the request to fetch cart items
    xhrGetCart.send();
});
// ...

// Add click event listeners to "Add To Cart" buttons
const addToCartButtons = document.querySelectorAll(".single-pricing .btn");
addToCartButtons.forEach((button) => {
    button.addEventListener("click", (event) => {
        event.preventDefault();
        const pricingSection = event.target.closest(".single-pricing");
        const title = pricingSection.querySelector(".title").textContent;
        const price = parseFloat(pricingSection.querySelector(".price").textContent.replace("$", ""));
        const image = pricingSection.querySelector("img").src;

        // Send the data to the server using an AJAX request
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "addToCart.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Handle the response if needed
            }
        };

        // Prepare the data to send to the server
        const data = new FormData();
        data.append("title", title);
        data.append("price", price);
        data.append("image", image);

        // Send the request
        xhr.send(data);

        // Update the UI to reflect that the item was added to the cart
        // (e.g., update the cart icon, display a confirmation message)
    });
});

// ...



</script> -->

<script>
    // Example function to fetch and display cart items dynamically
function fetchCartItems() {
    // Make an AJAX request to retrieve cart items from the database
    // Example using Fetch API
    fetch('fetch_cart_items.php') // Replace with your backend endpoint
        .then(response => response.json())
        .then(data => {
            const cartItemsList = document.getElementById('cart-items-list');
            const cartTotal = document.querySelector('#cart-total .amount');

            // Clear existing cart items
            cartItemsList.innerHTML = '';

            // Update cart items and total
            data.items.forEach(item => {
                const listItem = document.createElement('li');
                listItem.textContent = `${item.product}: $${item.price}`;
                cartItemsList.appendChild(listItem);
            });

            cartTotal.textContent = `$${data.total}`;
        })
        .catch(error => console.error('Error fetching cart items:', error));
}

// Call the fetchCartItems function when the page loads or when necessary
document.addEventListener('DOMContentLoaded', fetchCartItems);

</script>