<?php

return [
    'host' => 'localhost',
    'dbname' => 'norocorp',
    'usuario' => 'root',
    'senha' => 'sidicleia',
    'charset' => 'utf8',
    'opcoes' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ],
];
