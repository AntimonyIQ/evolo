<?php
// include 'conn.php';
session_start();

if(!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
} else {
    echo $_SESSION['name'];
}

?>