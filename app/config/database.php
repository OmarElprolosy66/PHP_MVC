<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(ROOT);
$dotenv->load();

/**
 * Database configurations array.
 * Contains parameters for connecting to the database.
 * 
 * @return array
 */
return [
    "port"          => $_ENV["DB_PORT"],          // Database port
    "server"        => $_ENV["DB_HOST"],          // Database server
    "user_name"     => $_ENV["DB_USERNAME"],      // Database username
    "password"      => $_ENV["DB_PASSWORD"],      // Database password
    "database_name" => $_ENV["DB_DATABASE"],      // Database name
    "database_type" => $_ENV["DB_TYPE"],          // Database type (e.g., mysql)
    "charset"       => $_ENV["DB_CHARSET"],       // Character set
];
