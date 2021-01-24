<?php

use yii\helpers\Html;
?>

<div class="content">
    <div class="content-title">
        <h2><?= Html::a($model->judul, [
                'view',
                'id' => $model->id_berita
            ]) ?></h2>
    </div>
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
    <div class="content-fill">
        <p style="text-align: justify;">
            <?= substr(strip_tags($model->isi_berita), 0, 300) ?>
        </p>
        <?= Html::a(
            'Selengkapnya',
            [
                'view',
                'id' => $model->id_berita
            ],
            ['class' => 'btn btn-sm btn-primary']
        ) ?>
    </div>
</div>