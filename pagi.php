<?php 
require_once __DIR__.'vendor/autoload.php';

$app = new \Silex\Application();

//Initialise the database connection
$app['db'] = function () {
    $host = 'localhost';
    $db_name = 'marquis';
    $user = 'root';
    $pass = '1111';

    return new \PDO(
        "mysql:host={$host};dbname={$db_name}",
        $user,
        $pass,
        array(\PDO::ATTR_EMULATE_PREPARES => false)
    );
};