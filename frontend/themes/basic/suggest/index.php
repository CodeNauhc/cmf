<?php
/**
 * Created by PhpStorm.
 * User: yidashi
 * Date: 16/5/31
 * Time: 下午5:33
 */
/* @var $this \yii\web\View */

?>
<div class="col-4">
    <?= \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_item',
        'itemOptions' => [
            'class' => 'media',
            'tag' => 'li'
        ],
        'options' => [
            'class' => 'media-list',
            'tag' => 'ul'
        ]
    ])?>

    <?= $this->render('create', ['model' => $model]); ?>
</div>
<?= \frontend\widgets\prettify\PrettifyWidget::widget() ?>