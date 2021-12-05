<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 05/12/2021
 * Time: 23:51
 */

return [
    'default' => 'mongodb',
    'connections' => [
        'mongodb' => [
            'driver' => 'mongodb',
            'host' => [env('DB_HOST_1'),env('DB_HOST_2'),env('DB_HOST_3')],
            'port' => env('DB_PORT', 27017),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'options' => [
                'replicaSet' => 'rs0',
                'authSource' => 'uefa-integration-service'
                //'database' => 'admin' // sets the authentication database required by mongo 3
            ]
        ],
    ],
    'migrations' => 'migrations',
];
