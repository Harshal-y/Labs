<?php
// get_param.php
$user = $_GET['user'] ?? 'guest';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Who Are You?</title>
</head>
<body>

<h2>Welcome</h2>

<?php
if ($user === 'admin') {
    echo "<h3>Flag: nodezer0_0CTF{3Asy_g3t_pAr4m}</h3>";
} else {
    echo "<p>Hello $user!</p>";
    echo "<p>Only admins can see the secret.</p>";
}
?>

</body>
</html>
