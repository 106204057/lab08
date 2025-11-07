<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include 'include/header.inc'; ?>
    <?php session_start(); ?>

    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="text" name="password" required><br>

        <input type="hidden" name="token" value="abc123">
        <input type="submit" value="Login">
    </form>

    <?php include 'include/footer.inc'; ?>
</body>
</html>