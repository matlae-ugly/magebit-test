<?php
function env($prop) {
    $config = [
        'defaultRoute' => 'email/subscribe',
        'db_user' => 'root',
        'db_pw' => 'kill',
        'db_host' => 'localhost',
        'db_database' => 'magebit'
    ];
    return $config[$prop];
}
