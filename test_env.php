<?php
require_once __DIR__ . '/vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

var_dump(
    getenv('APP_ENV'),
    getenv('MYSQL_HOST'),
    getenv('MYSQL_DB'),
    getenv('MYSQL_USER'),
    getenv('MYSQL_PASS'),
    getenv('BASE_URL_LOCAL'),
    getenv('BASE_URL_PROD'),
    getenv('MYSQL_HOST_PROD'),
    
);
