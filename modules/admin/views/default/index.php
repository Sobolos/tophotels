<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Tophotels';
?>
<div class="tour-selection-box">
    <div class="panel">
        <h1>Admin</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Дата</th>
                <th scope="col">Направление</th>
                <th scope="col">Имя клиента</th>
                <th scope="col">Телефон клиента</th>
                <th scope="col">Email клиента</th>
                <th scope="col">Доп. пожелание</th>
            </tr>
            </thead>
            <tbody>

                <?php foreach ($leads as $lead): ?>
                <tr>
                    <td><?= $lead->leadId ?></td>
                    <td><?= $lead->leadAddDate ?></td>
                    <td><?= $lead->leadRoute ?></td>
                    <td><?= $lead->leadCustomerName ?></td>
                    <td><?= $lead->leadCustomerPhone ?></td>
                    <td><?= $lead->leadCustomerEmail ?></td>
                    <td><?= $lead->leadWishes ?></td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
        <?= LinkPager::widget(['pagination' => $pagination]) ?>
    </div>
</div>