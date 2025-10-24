<?php 
    include 'include/header.inc';
    
    session_start();
    if (isset($_SESSION['user'])) {
        echo "Welcome, ".$_SESSION['user'];
    }
    else {
        header('Location: login.php');
    }
    include 'include/footer.inc';
?>