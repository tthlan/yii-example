<?php
return [
    'components' => [
        'mongodb' => [
            'class' => '\yii\mongodb\Connection',
            'server' => 'mongodb://localhost:27017',
            'db' => 'test',
            // Optional: Specify additional options
            // 'options' => [
            //     'username' => 'your_username',
            //     'password' => 'your_password',
            // ],
        ],
    ],
];