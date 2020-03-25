<?php
namespace app\cron;

use Yii;

class Mail
{
    public function send($name, $phone)
    {
        Yii::$app->mailer->htmlLayout = "layouts/html";
        Yii::$app->mailer->compose('newlead', ['data' => ['name' => $name, 'phone' => $phone]])
            ->setTo('germansobol@yandex.ru')
            ->setFrom([ 'test.th.welcome@gmail.com'])
            ->setSubject('Добавлена новая заявка')
            ->send();
    }
}
var_dump(Yii::$app->mailer->compose());

$Mail = new Mail();
$Mail->send($argv[1], $argv[2]);

