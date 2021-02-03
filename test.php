<?php
echo 'hi';
$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__.'/.env');

$dbUser = getenv('DB_USER');
$dbUser = $_ENV['DB_USER'];
$dbUser = $_SERVER['DB_USER'];

echo 'hi';
?>