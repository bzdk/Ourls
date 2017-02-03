<?php

return [
    'debug'    => true,
    'base_url' => 'http://timotai.co/',
    'hash'     => [
        'salt'     => 'kM3Y34F9WKjamt5KaKNMKZBM',
        'length'   => 4,
        'alphabet' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',
    ],
    'db' => [
        'database_type' => 'mysql',
        'database_name' => 'ourls',
        'server'        => 'localhost',
        'username'      => 'root',
        'password'      => '',
        'charset'       => 'utf8',
        'port'          => 3306,
        'option'        => [
            PDO::ATTR_CASE => PDO::CASE_NATURAL,
        ],
    ],
    'db_read' => [
        'database_type' => 'mysql',
        'database_name' => 'ourls',
        'server'        => 'localhost',
        'username'      => 'root',
        'password'      => '',
        'charset'       => 'utf8',
        'port'          => 3306,
        'option'        => [
            PDO::ATTR_CASE => PDO::CASE_NATURAL,
        ],
    ],
    'settings' => [
        'external_js' => null,
    ],
    'proxies' => [
        '127.0.0.0/8',
        '10.0.0.0/8',
        '172.16.0.0/12',
        '192.168.0.0/16',
        'fd00::/8',
    ],
];
