<?php
include 'conn.php';
if(!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
} else {
    echo $_SESSION['name'];
}

?>