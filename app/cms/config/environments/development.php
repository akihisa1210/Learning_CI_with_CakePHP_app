<?php

\Josegonzalez\Environments\Environment::configure(
    'development',
    true,
    [
        'Datasources.default.host' => 'localhost',
        'Datasources.default.username' => 'webapp',
        'Datasources.default.password' => 'passw0rd',
        'Datasources.default.database' => 'blog',
        'Datasources.test.host' => 'localhost',
        'Datasources.test.username' => 'webapp',
        'Datasources.test.password' => 'passw0rd',
        'Datasources.test.database' => 'test_blog',
    ]
);
