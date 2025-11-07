<?php
    require_once('setting.php');
    session_start();

    $conn = mysqli_connect($host, $user, $pwd, $sql_db);
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Signup successful. <a href='login_page.php'>Login here</a>.";
    } else {
        echo "Signup failed";
    }
?>
