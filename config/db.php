<?php

$_fn=realpath(__DIR__."/../db")."/tophotels.sqlite";

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlite:'.$_fn,
];