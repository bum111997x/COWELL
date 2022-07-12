<?php
$username = 'root';
$pass = '';
$conn = new PDO('mysql:host=localhost;dbname=cowell', $username, $pass);
$stmt = $conn->prepare('INSERT INTO users ( email, password) values (:email, :password)');
// $stmt->bindParam(1, $email);
// $stmt->bindParam(2, $password);

$email = "lamvh@live.com";
$password = 'tung12345';
$stmt->execute([
    'email' => $email,
    'password' => $password
]);

?>