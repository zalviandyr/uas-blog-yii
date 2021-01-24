<?php

use common\models\Berita;
use yii\bootstrap\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;

$this->title = Yii::$app->name . ' - ' . $model->judul;
?>

<div class="content">
    <div class="content-title">
        <h2><?= Html::a($model->judul, [
                'view',
                'id' => $model->id_berita
            ]) ?>
        </h2>
        <div class="content-detail">
            Tanggal : <strong><?= date('d-m-Y') ?></strong>
            &nbsp; | &nbsp;
            Oleh : <strong><?= $model->user->nama_depan . ' ' . $model->user->nama_belakang ?></strong>
            &nbsp; | &nbsp;
            Komentar : <strong><?= count($model->komentars) ?></strong>
            &nbsp; | &nbsp;
            Dilihat : <strong><?= $model->jml_baca ?></strong>
            &nbsp; | &nbsp;
            Kategori : <strong><?= $model->kategori->kategori ?></strong>
        </div>
        <br>
        <div class="content-fill">
            <?= nl2br($model->isi_berita) ?>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-info">
                <div class="panel-heading">Komentar</div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin([
                        'options' => [
                            'style' => 'font-size: 80%'
                        ]
                    ]) ?>

                    <?= $form->field($komentarForm, 'id_berita')->hiddenInput(['value' => $model->id_berita])->label() ?>

                    <?= $form->field($komentarForm, 'nama')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($komentarForm, 'email')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($komentarForm, 'isi_komentar')->textarea(['rows' => 6]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Kirim', ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end() ?>
                </div>
            </div>
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
    <hr>
    <h3><i>Komentar</i></h3>
    <?= ListView::widget([
        'dataProvider' => $dataProviderKomentar,
        'layout' => "{items}\n{pager}",
        'itemOptions' => ['class' => 'item'],
        'itemView' => '_itemKomentar'
    ]) ?>
</div>