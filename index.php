<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Store</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <h1>Welcome to the MUSIKin!</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="hero">
        <h2>Your One-Stop Shop for Musical Instruments</h2>
        <p>Discover a wide range of guitars, pianos, drums, and more.</p>
    </section>

    <section id="featured-products">
        <h3>Featured Products</h3>
        <div class="product-list">
            <?php
            $products = [
                ['name' => 'Guitar Yamaha', 'image' => 'images/guitar.jpg', 'price' => 'Rp 2.500.000'],
                ['name' => 'Digital Piano', 'image' => 'images/piano.jpg', 'price' => 'Rp 5.000.000'],
                ['name' => 'Drum Set', 'image' => 'images/drums.jpg', 'price' => 'Rp 3.000.000'],
            ];

            foreach ($products as $product) {
                echo "<div class='product-item'>
                        <img src='{$product['image']}' alt='{$product['name']}'>
                        <h4>{$product['name']}</h4>
                        <p>{$product['price']}</p>
                    </div>";
            }
            ?>
        </div>
    </section>
    <br><br>
    <br><br>
    <footer>
        <p>&copy; 2024 MUSIKin</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
