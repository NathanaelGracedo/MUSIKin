<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSIKin - Products</title>
    <link rel="stylesheet" href="style/style.css"> 
</head>
<body>
    <header>
        <h1>Our Products</h1> 
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li> 
            </ul>
        </nav>
    </header>

    <section id="product-list">
        <h3>Available Products</h3> 
        <div class="product-list">
            <!-- PHP untuk menampilkan produk secara dinamis -->
            <?php
            $products = [
                ['name' => 'Guitar Yamaha', 'image' => 'images/guitar.jpg', 'price' => 'Rp 2.500.000', 'description' => 'Guitar Yamaha with rich sound and high quality build.'],
                ['name' => 'Digital Piano', 'image' => 'images/piano.jpg', 'price' => 'Rp 5.000.000', 'description' => 'Digital piano with authentic sound and multiple features.'],
                ['name' => 'Drum Set', 'image' => 'images/drums.jpg', 'price' => 'Rp 3.000.000', 'description' => 'Complete drum set for professionals.'],
                ['name' => 'Bass Guitar', 'image' => 'images/bass.jpg', 'price' => 'Rp 3.500.000', 'description' => 'High-quality bass guitar with deep sound.'],
                ['name' => 'Violin', 'image' => 'images/violin.jpg', 'price' => 'Rp 2.000.000', 'description' => 'Classical violin with superior tone.'],
                ['name' => 'Ukulele', 'image' => 'images/ukulele.jpg', 'price' => 'Rp 1.500.000', 'description' => 'Compact ukulele, perfect for beginners.'],
                ['name' => 'Harmonica', 'image' => 'images/harmonica.jpg', 'price' => 'Rp 500.000', 'description' => 'Easy-to-learn harmonica with a sweet tone.'],
                ['name' => 'Electric Guitar', 'image' => 'images/electric_guitar.jpg', 'price' => 'Rp 4.000.000', 'description' => 'High-performance electric guitar for rock enthusiasts.'],
                ['name' => 'Flute', 'image' => 'images/flute.jpg', 'price' => 'Rp 1.800.000', 'description' => 'Classical flute with crisp sound and precision.'],
                ['name' => 'Keyboard', 'image' => 'images/keyboard.jpg', 'price' => 'Rp 3.200.000', 'description' => 'Portable keyboard with multiple instrument sounds.']
            ];

            foreach ($products as $index => $product) {
                // Menampilkan produk dengan onclick yang akan memanggil fungsi JavaScript untuk membuka modal
                echo "<div class='product-item' onclick='showProductDetail($index)'>
                        <img src='{$product['image']}' alt='{$product['name']}'>
                        <h4>{$product['name']}</h4>
                        <p>{$product['price']}</p>
                    </div>";
            }
            ?>
        </div>
    </section>

    <!-- Modal untuk menampilkan detail produk -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span> 
            <img id="modalImage" src="" alt=""> 
            <h4 id="modalName"></h4>
            <p id="modalPrice"></p>
            <p id="modalDescription"></p> 
        </div>
    </div>
    <br><br>
    <br><br>
    <footer>
        <p>&copy; 2024 MUSIKin</p> 
    </footer>

    <script src="script.js"></script>
</body>
</html>
