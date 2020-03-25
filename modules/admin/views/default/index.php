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
                <th scope="col">Город клиента</th>
                <th scope="col">Дата вылета / Количество ночей</th>
                <th scope="col">Количество человек</th>
                <th scope="col">Бюджет</th>
                <th scope="col">Доп. пожелание</th>
            </tr>
            </thead>
            <tbody>

                <?php foreach ($leads as $lead): ?>
                <tr>
                    <td><?= $lead->Id ?></td>
                    <td><?= $lead->AddDate ?></td>
                    <td><?= $lead->Route ?></td>
                    <td><?= $lead->CustomerName ?></td>
                    <td><?= $lead->CustomerPhone ?></td>
                    <td><?= $lead->CustomerEmail ?></td>
                    <td><?= $lead->CustomerCity ?></td>
                    <td><?= $lead->DepartiationDate?> / <?= $lead->AmountNights?></td>
                    <td>Взрослых: <?= $lead->Adults?> / Детей: <?= $lead->Children?>(<?= $lead->Child1Age?>;<?= $lead->Child2Age?>;<?= $lead->Child3Age?>)</td>
                    <td>Комфортный бюджет: <?= $lead->PriceComfort ?> / Максимальный бюджет: <?= $lead->PriceMax ?></td>
                    <td><?= $lead->Wishes ?></td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
        <?= LinkPager::widget(['pagination' => $pagination]) ?>
    </div>
</div>