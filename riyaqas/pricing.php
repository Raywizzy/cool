<!-- pricing area start -->
<div class="sba-pricing-area bg-gray  mg-top-105 pd-default-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-9">
                <div class="section-title text-center">
                    <h2 class="title">Choose your <span>pricing</span></h2>


                    <p>Explore our pricing plans designed to meet your needs. Our support team will assist you every step of the way to ensure you get the most out of our services.</p>


                    

                </div>
            </div>
        </div>

    </div>
</div>

<!-- Pricing area for App Development Packages -->
<div class="sba-pricing-area bg-gray mg-top-105 pd-default-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-9">
                <div class="section-title text-center">
                    <h3 class="title">App Development <span>Packages</span></h3>
                </div>
            </div>
        </div>
        <div class="row custom-gutters-20" id="pricing-packages">
            <!-- App development packages will be dynamically added here -->
            <?php
            // Establish a database connection (replace with your own database connection logic)
            $servername = "localhost";
            $db_username = "your_db_username";
            $db_password = "your_db_password";
            $dbname = "ecommerce_db";

            $conn = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Fetch app development packages from the app_packages table
            $sql = "SELECT * FROM app_packages";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Generate HTML for each app package
                    $packageTitle = $row["title"];
                    $packagePrice = $row["price"];
                    $packageDescription = explode("\n", $row["description"]);
                    $packageCurrency = $row["currency"];

                    // Modify the link to include product details
                    $addToCartLink = "add_to_cart.php?packageTitle=" . urlencode($packageTitle) .
                                    "&packagePrice=" . $packagePrice .
                                    "&packageCurrency=" . urlencode($packageCurrency);
                    ?>
                    <div class="col-xl-4 col-sm-6">
                        <div class="single-pricing">
                            <h6 class="title text-center"><?= $packageTitle ?></h6>
                            <div class="thumb text-center">
                                <img src="assets/img/price/<?= $row["id"] ?>.png" alt="pricing">
                            </div>
                            <h3 class="price text-center" data-usd-price="<?= $packagePrice ?>">$<?= $packagePrice ?><span></span></h3>
                            <ul>
                                <?php
                                foreach ($packageDescription as $description) {
                                    echo '<li class="bold"><i class="fa-solid fa-check"></i> <span>' . $description . '</span></li>';
                                }
                                ?>
                            </ul>
                            <div class="text-center">
                                <a class="btn text-center btn-white btn-rounded" href="<?= $addToCartLink ?>">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                echo "No app development packages available.";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</div>
<!-- End of App Development Packages -->



<!-- Pricing area for Data Analytics Packages -->
<div class="sba-pricing-area bg-gray mg-top-105 pd-default-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-9">
                <div class="section-title text-center">
                    <h3 class="title">Data Analytics <span>Packages</span></h3>
                </div>
            </div>
        </div>
        <div class="row custom-gutters-20" id="pricing-packages">
            <!-- Data analytics packages will be dynamically added here -->
            <?php
            // Establish a database connection (replace with your own database connection logic)
            $servername = "localhost";
            $db_username = "your_db_username";
            $db_password = "your_db_password";
            $dbname = "ecommerce_db";
            
            $conn = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Fetch data analytics packages from the data_analytics_packages table
            $sql = "SELECT * FROM data_analytics_packages";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Generate HTML for each data analytics package
                    $packageTitle = $row["title"];
                    $packagePrice = $row["price"];
                    $packageDescription = explode(", ", $row["description"]);
                    $packageCurrency = $row["currency"];
                    ?>
                    <div class="col-xl-4 col-sm-6">
                        <div class="single-pricing">
                            <h6 class="title text-center"><?= $packageTitle ?></h6>
                            <div class="thumb text-center">
                                <img src="assets/img/price/<?= $row["id"] ?>.png" alt="pricing">
                            </div>
                            <h3 class="price text-center" data-usd-price="<?= $packagePrice ?>">$<?= $packagePrice ?><span></span></h3>
                            <ul>
                                <?php
                                foreach ($packageDescription as $description) {
                                    echo '<li class="bold"><i class="fa-solid fa-check"></i> <span>' . $description . '</span></li>';
                                }
                                ?>
                            </ul>
                            <div class="text-center">
                                <a class="btn text-center btn-white btn-rounded" href="contact.php">Contact Us</a>                            
                            </div>
                        </div>
                    </div>
                    
                <?php
                }
            } else {
                echo "No data analytics packages available.";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</div>
<!-- End of Data Analytics Packages -->

<!-- Digital Marketing Packages -->
<div class="sba-pricing-area bg-gray mg-top-105 pd-default-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-9">
                <div class="section-title text-center">
                    <h3 class="title">Digital Marketing <span>Packages</span></h3>
                </div>
            </div>
        </div>
        <div class="row custom-gutters-20">
            <?php
            // Database connection
            $servername = "localhost";
            $db_username = "your_db_username";
            $db_password = "your_db_password";
            $dbname = "ecommerce_db";

            $conn = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query to retrieve Digital Marketing Packages
            $sql = "SELECT * FROM digital_marketing_packages";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $packageTitle = $row["title"];
                    $packagePrice = $row["price"];
                    $packageCurrency = $row["currency"];
                    ?>
                    <div class="col-xl-4 col-sm-6">
                        <div class="single-pricing">
                            <h6 class="title text-center"><?php echo $packageTitle; ?></h6>
                            <div class="thumb text-center">
                                <img src="assets/img/price/<?= $row["id"] ?>.png" alt="pricing">
                            </div>
                            <span class="cool">For as low as</span>
                            <h3 class="rice text-center" data-usd-price="<?php echo $packagePrice; ?>">
                                <?php echo '$' . number_format($packagePrice, 2); ?>
                                <?php echo '<span>/' . $packageCurrency . '</span>'; ?>
                            </h3>

                            <div class="text-center">
                                <?php
                                // Modify the link to include product details
                                $addToCartLink = "checkout.php?packageTitle=" . urlencode($packageTitle) .
                                    "&packagePrice=" . $packagePrice .
                                    "&packageCurrency=" . urlencode($packageCurrency);
                                ?>
                                <a class="btn text-center btn-white btn-rounded" href="<?= $addToCartLink ?>">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "No packages available.";
            }
            $conn->close();
            ?>
        </div>
    </div>
</div>


<!-- pricing area start -->
<!-- Pricing area for Project Management Packages -->
<div class="sba-pricing-area bg-gray mg-top-105 pd-default-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-9">
                <div class="section-title text-center">
                    <h3 class="title">Project Management <span>Packages</span></h3>
                </div>
            </div>
        </div>
        <div class="row custom-gutters-20" id="pricing-packages">
            <!-- PHP code to fetch and display Project Management Packages from the database -->
            <?php
            // Establish a database connection (replace with your own database connection logic)
            $servername = "localhost";
            $db_username = "your_db_username";
            $db_password = "your_db_password";
            $dbname = "ecommerce_db";

            $conn = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Fetch Project Management Packages from the database
            $sql = "SELECT * FROM project_management_packages";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Extract package details from the database
                    $packageTitle = $row["title"];
                    $packageDescription = explode("\n", $row["description"]);
                    $packagePrice = $row["price"];
                    $packageCurrency = $row["currency"];
                    ?>
                    <div class="col-xl-4 col-sm-6">
                        <div class="single-pricing">
                            <h6 class="title text-center"><?= $packageTitle ?></h6>
                            <div class="thumb text-center">
                                <img src="assets/img/price/<?= $row["id"] ?>.png" alt="pricing">
                            </div>
                            <!-- Display the price with the appropriate currency symbol -->
                            <h3 class="price text-center" data-usd-price="<?= $packagePrice ?>">
                                <?= $packageCurrency ?> <?= number_format($packagePrice, 2) ?><span></span>
                            </h3>
                            <ul>
                                <?php
                                // Display checkmarks for all descriptions
                                foreach ($packageDescription as $description) {
                                    echo '<li class="bold"><i class="fa-solid fa-check"></i> <span>' . $description . '</span></li>';
                                }
                                ?>
                            </ul>
                            <div class="text-center">
                                <a class="btn text-center btn-white btn-rounded"  href="contact.php">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "No Project Management Packages available.";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</div>
<!-- Pricing area End -->


<!-- SEO Packages -->
<div class="sba-pricing-area bg-gray mg-top-105 pd-default-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-9">
                <div class="section-title text-center">
                    <h3 class="title">SEO <span>Packages</span></h3>
                </div>
            </div>
        </div>
        <div class="row custom-gutters-20" id="pricing-packages">
            <?php
            // Establish a database connection (replace with your own database connection logic)
            $servername = "localhost";
            $db_username = "your_db_username";
            $db_password = "your_db_password";
            $dbname = "ecommerce_db";
            
            $conn = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Fetch SEO packages from the seo_packages table
            $sql = "SELECT * FROM seo_packages";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $packageTitle = $row["title"];
                    $packagePrice = $row["price"];
                    $packageDescription = explode("\n", $row["description"]);
                    $packageCurrency = $row["currency"];
                    ?>
                    <div class="col-xl-4 col-sm-6">
                        <div class="single-pricing">
                            <h6 class="title text-center"><?= $packageTitle ?></h6>
                            <div class="thumb text-center">
                                <img src="assets/img/price/<?= $row["id"] ?>.png" alt="pricing">
                            </div>
                            <h3 class="price text-center" data-usd-price="<?= $packagePrice ?>">$<?= $packagePrice ?><span></span></h3>
                            <ul>
                                <?php
                                foreach ($packageDescription as $description) {
                                    echo '<li class="bold"><i class="fa-solid fa-check"></i> <span>' . $description . '</span></li>';
                                }
                                ?>
                            </ul>
                            <div class="text-center">
                                <?php
                                // Modify the link to include product details
                                $addToCartLink = "checkout.php?packageTitle=" . urlencode($packageTitle) .
                                    "&packagePrice=" . $packagePrice .
                                    "&packageCurrency=" . urlencode($packageCurrency);
                                ?>
                                <a class="btn text-center btn-white btn-rounded" href="<?= $addToCartLink ?>">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                echo "No SEO packages available.";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</div>

<!-- Software Development Packages -->
<div class="sba-pricing-area bg-gray mg-top-105 pd-default-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-9">
                <div class= "section-title text-center">
                    <h3 class="title">Software Development <span>Packages</span></h3>
                </div>
            </div>
        </div>
        <div class="row custom-gutters-20" id="pricing-packages">
            <?php
            // Establish a database connection (replace with your own database connection logic)
            $servername = "localhost";
            $db_username = "your_db_username";
            $db_password = "your_db_password";
            $dbname = "ecommerce_db";

            $conn = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Fetch Software Development packages from the software_development_packages table
            $sql = "SELECT * FROM software_development_packages";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $packageTitle = $row["title"];
                    $packagePrice = $row["price"];
                    $packageDescription = explode("\n", $row["description"]);
                    $packageCurrency = $row["currency"];
                    ?>
                    <div class="col-xl-4 col-sm-6">
                        <div class="single-pricing">
                            <h6 class="title text-center"><?= $packageTitle ?></h6>
                            <div class="thumb text-center">
                                <img src="assets/img/price/<?= $row["id"] ?>.png" alt="pricing">
                            </div>
                            <h3 class="price text-center" data-usd-price="<?= $packagePrice ?>">$<?= $packagePrice ?><span></span></h3>
                            <ul>
                                <?php
                                foreach ($packageDescription as $description) {
                                    echo '<li class="bold"><i class="fa-solid fa-check"></i> <span>' . $description . '</span></li>';
                                }
                                ?>
                            </ul>
                            <div class="text-center">
                                <?php
                                // Modify the link to include product details
                                $addToCartLink = "checkout.php?packageTitle=" . urlencode($packageTitle) .
                                    "&packagePrice=" . $packagePrice .
                                    "&packageCurrency=" . urlencode($packageCurrency);
                                ?>
                                <a class="btn text-center btn-white btn-rounded" href="<?= $addToCartLink ?>">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                echo "No Software Development packages available.";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</div>


<!-- pricing area start -->
<div class="sba-pricing-area bg-gray mg-top-105 pd-default-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-9">
                <div class="section-title text-center">
                    <h3 class="title">Tech Sales <span>Packages</span></h3>
                </div>
            </div>
        </div>
        <div class="row custom-gutters-20" id="pricing-packages">
            <!-- Tech Sales packages will be dynamically added here -->
            <?php
            // Establish a database connection (replace with your own database connection logic)
            $servername = "localhost";
            $db_username = "your_db_username";
            $db_password = "your_db_password";
            $dbname = "ecommerce_db";

            $conn = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Fetch Tech Sales packages from the tech_sales_packages table
            $sql = "SELECT * FROM tech_sales_packages";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Generate HTML for each Tech Sales package
                    $packageTitle = $row["title"];
                    $packagePrice = $row["price"];
                    $packageDescription = explode("\n", $row["description"]);
                    $packageCurrency = $row["currency"];
                    ?>
                    <div class="col-xl-4 col-sm-6">
                        <div class="single-pricing">
                            <h6 class="title text-center"><?= $packageTitle ?></h6>
                            <div class="thumb text-center">
                                <img src="assets/img/price/<?= $row["id"] ?>.png" alt="pricing">
                            </div>
                            <h3 class="price text-center" data-usd-price="<?= $packagePrice ?>">$<?= $packagePrice ?><span></span></h3>
                            <ul>
                                <?php
                                foreach ($packageDescription as $description) {
                                    echo '<li class="bold"><i class="fa-solid fa-check"></i> <span>' . $description . '</span></li>';
                                }
                                ?>
                            </ul>
                            <div class="text-center">
                                <a class="btn text-center btn-white btn-rounded" href="checkout.php?tier=<?= $packageTitle ?>&price=<?= $packagePrice ?>&currency=<?= $packageCurrency ?>">Contact Us</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                echo "No Tech Sales packages available.";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</div>
<!-- pricing area End -->

<!-- UI/UX Design Packages -->
<div class="sba-pricing-area bg-gray mg-top-105 pd-default-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-9">
            <div class="section-title text-center">

                    <h3 class="title">UI/UX Design <span>Packages</span></h3>
                </div>
            </div>
        </div>
        <div class="row custom-gutters-20" id="pricing-packages">
            <?php
            // Establish a database connection (replace with your own database connection logic)
            $servername = "localhost";
            $db_username = "your_db_username";
            $db_password = "your_db_password";
            $dbname = "ecommerce_db";

            $conn = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Fetch UI/UX Design packages from the ui_ux_design_packages table
            $sql = "SELECT * FROM ui_ux_design_packages";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Generate HTML for each UI/UX Design package
                    $packageTitle = $row["title"];
                    $packagePrice = $row["price"];
                    $packageDescription = explode("\n", $row["description"]);
                    $packageCurrency = $row["currency"];
                    ?>
                    <div class="col-xl-4 col-sm-6">
                        <div class="single-pricing">
                            <h6 class="title text-center"><?= $packageTitle ?></h6>
                            <div class="thumb text-center">
                                <img src="assets/img/price/<?= $row["id"] ?>.png" alt="pricing">
                            </div>
                            <h3 class="price text-center" data-usd-price="<?= $packagePrice ?>">$<?= $packagePrice ?><span></span></h3>
                            <ul>
                                <?php
                                foreach ($packageDescription as $description) {
                                    echo '<li class="bold"><i class="fa-solid fa-check"></i> <span>' . $description . '</span></li>';
                                }
                                ?>
                            </ul>
                            <div class="text-center">
                                <?php
                                // Modify the link to include product details
                                $addToCartLink = "checkout.php?packageTitle=" . urlencode($packageTitle) .
                                    "&packagePrice=" . $packagePrice .
                                    "&packageCurrency=" . urlencode($packageCurrency);
                                ?>
                                <a class="btn text-center btn-white btn-rounded" href="<?= $addToCartLink ?>">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                echo "No UI/UX Design packages available.";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</div>

<!-- pricing area End -->


<!-- pricing area start -->
<div class="sba-pricing-area bg-gray mg-top-105 pd-default-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-9">
                <div class="section-title text-center">
                    <h3 class="title">Website Development <span>Packages</span></h3>
                </div>
            </div>
        </div>
        <div class="row custom-gutters-20" id="pricing-packages">
            <?php
            // Establish a database connection (replace with your own database connection logic)
            $servername = "localhost";
            $db_username = "your_db_username";
            $db_password = "your_db_password";
            $dbname = "ecommerce_db";

            $conn = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Fetch Website Development packages from the website_development_packages table
            $sql = "SELECT * FROM website_development_packages";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Generate HTML for each Website Development package
                    $packageTitle = $row["title"];
                    $packagePrice = $row["price"];
                    $packageDescription = explode("\n", $row["description"]);
                    $packageCurrency = $row["currency"];
                    ?>
                    <div class="col-xl-4 col-sm-6">
                        <div class="single-pricing">
                            <h6 class="title text-center"><?= $packageTitle ?></h6>
                            <div class="thumb text-center">
                                <img src="assets/img/price/<?= $row["id"] ?>.png" alt="pricing">
                            </div>
                            <h3 class="price text-center" data-usd-price="<?= $packagePrice ?>">$<?= $packagePrice ?><span></span></h3>
                            <ul>
                                <?php
                                foreach ($packageDescription as $description) {
                                    echo '<li class="bold"><i class="fa-solid fa-check"></i> <span>' . $description . '</span></li>';
                                }
                                ?>
                            </ul>
                            <div class="text-center">
                                <?php
                                // Modify the link to include product details
                                $addToCartLink = "checkout.php?packageTitle=" . urlencode($packageTitle) .
                                    "&packagePrice=" . $packagePrice .
                                    "&packageCurrency=" . urlencode($packageCurrency);
                                ?>
                                <a class="btn text-center btn-white btn-rounded" href="<?= $addToCartLink ?>">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                echo "No Website Development packages available.";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</div>


<!-- <script>
const addItem = (title, price, image) => {
 const item = { title, price, image };
 shoppingCart.push(item);
 renderCartItems();
};

const removeItem = (title) => {
 shoppingCart = shoppingCart.filter(item => item.title !== title);
 renderCartItems();
};

const renderCartItems = () => {
 // Code to render the cart items goes here
};

const updateSubtotal = () => {
 const subtotal = shoppingCart.reduce((total, item) => total + item.price, 0);
 // Code to update the subtotal in the UI goes here
};

const updateQuantity = (title, quantity) => {
 const item = shoppingCart.find(item => item.title === title);
 if (item) {
    item.quantity = quantity;
 }
 updateSubtotal();
};
</script> -->


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

            addToCart(title, price, image);
        });
    });

    // Add click event listener to the "Empty Cart" button
    emptyCartButton.addEventListener("click", () => {
        shoppingCart.items = []; // Clear the shopping cart
        renderCartItems();
        updateCartSubtotal();
    });
});

</script> -->