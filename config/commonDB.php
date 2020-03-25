<?php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=db.tophotels.site;port=6432;dbname=dict',
    'username' => 'dict_reader',
    'password' => 'dict_reader',
    'charset' => 'utf8',
    'tablePrefix' => 'dict_',
    'schemaMap' => [
        'pgsql'=> [
            'class'=>'yii\db\pgsql\Schema',
            'defaultSchema' => 'dict'
        ]
    ],
    'on afterOpen' => function ($event) {
        $event->sender->createCommand("SET search_path TO dict")->execute();
    }
];