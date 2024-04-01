<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Produk</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Daftar Buah Segar</h1>
  <div class="product-container">
    <?php
// Data produk
$products = array(
    array(
        "name" => "Melon",
        "description" => "Buah berwarna hijau dan rasanya manis.",
        "price" => "Rp30.000",
        "image" => "images/product1.jpg" // Lokasi gambar produk
    ),
    array(
        "name" => "Semangka",
        "description" => "Buah yang sangat menyegarkan saat dimakan.",
        "price" => "Rp25.000",
        "image" => "images/product2.jpg" // Lokasi gambar produk
    ),
    array(
        "name" => "Apel Merah",
        "description" => "Buah dengan rasa manis dan tekstur renyah saat dimakan.",
        "price" => "Rp40.000",
        "image" => "images/product3.jpg" // Lokasi gambar produk
    ),
    array(
        "name" => "Kiwi",
        "description" => "Buah kecil berwarna hijau dengan rasa manis saat dimakan.",
        "price" => "Rp20.000",
        "image" => "images/product4.jpg" // Lokasi gambar produk
    ),
    // Tambahkan data produk lainnya di sini
);
?>

<!-- Looping untuk menampilkan produk -->
<?php foreach ($products as $product) : ?>
    <div class="product-item">
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <h2><?php echo $product['name']; ?></h2>
        <p><?php echo $product['description']; ?></p>
        <p>Price: <?php echo $product['price']; ?></p>
    </div>
<?php endforeach; ?>

  </div>
</body>
</html>
