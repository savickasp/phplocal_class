<?php

try {
    $conn = new PDO('mysql:host=phplocal.lt;dbname=phplocal', 'root', '');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print 'connected';
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$user_name = 'vardassssssssss';
$user_email = 'pastas@pastassssss.lt';
$user_password = 'asd';

$stmt = $conn->prepare("INSERT INTO users (user_name, user_email, user_password)
    VALUES ('$user_name', '$user_email', '$user_password')");
$stmt->execute();
