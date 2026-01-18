<?php
$db = new SQLite3(__DIR__ . '/users.db');
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // INTENTIONALLY VULNERABLE
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $db->query($query);

    if ($result && $result->fetchArray()) {
        $message = "<h3>Flag: nodezer0_0CTF{sqlite_sqli}</h3>";
    } else {
        $message = "<p class='error'>Login failed</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Broken Login (SQLite)</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background: #111;
            color: #fff;
        }

        .login-box {
            background: #1c1c1c;
            padding: 30px;
            border-radius: 8px;
            width: 300px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background: #4caf50;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #43a047;
        }

        .error {
            color: #ff5252;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <?php echo $message; ?>
</div>

</body>
</html>
