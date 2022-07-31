<?php
include 'conn.php';
$select = 'SELECT * FROM user WHERE email = ?';
$extra = 'SELECT id, username, email, password, wallet, balance, ref_id, t_ref, withdrawal FROM user WHERE email = ?';
$insert = 'INSERT INTO user(username, email, password, wallet, balance, ref_id, t_ref, withdrawal) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
$uniqid = uniqid('eblock_');
?>