<?php

/* @var $this yii\web\View */

use common\models\Berita;
use yii\helpers\Html;
use yii\widgets\ListView;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome</h1>

        <p class="lead">Create By. Zukron Alviandy R</p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-8">
                <?= ListView::widget([
                    'dataProvider' => $dataProvider,
                    'layout' => "{items}\n{pager}",
                    'itemOptions' => ['class' => 'item'],
                    'itemView' => '_itemBerita'
                ]);
                ?>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Top Berita</div>
                    <div class="panel-body">
                        <ul>
                            <?php foreach (Berita::topBerita() as $row) : ?>
                                <li>
                                    <?= Html::a($row->judul . ' (' . $row->jml_baca . ')', [
                                        'view',
                                        'id' => $row->id_berita
                                    ]) ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>