<?php
session_start();

// Cek apakah pengguna telah mengirimkan form login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check username and password
    $username = "admin"; // Ganti dengan username yang diinginkan
    $password = "admin123"; // Ganti dengan password yang diinginkan

    // Ambil data username dan password dari form login
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    // Periksa apakah username dan password sesuai
    if ($inputUsername === $username && $inputPassword === $password) {
        // Jika cocok, arahkan pengguna ke halaman produk
        header("Location: product.php");
        exit;
    } else {
        // Jika tidak cocok, tampilkan pesan kesalahan
        $errorMessage = "Username dan password tidak cocok.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>ARComputer</h1><br><br>
        <h2>Login</h2>
        <!-- Tampilkan pesan kesalahan jika ada -->
        <?php if (isset($login_error)) : ?>
            <p class="error"><?php echo $login_error; ?></p>
        <?php endif; ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>