<?php
// bruteforce.php
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = $_POST['password'] ?? '';

    if ($password === "admin123") {
        $message = "<h3>Flag: nodezer0_0CTF{w3Ak_P4ssW0rd}</h3>";
    } else {
        $message = "<p style='color:red;'>Wrong password!</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Weak Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>

<?php echo $message; ?>

</body>
</html>
