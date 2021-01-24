<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "komentar".
 *
 * @property int $id_komentar
 * @property int|null $id_berita
 * @property string|null $nama
 * @property string|null $email
 * @property string|null $isi_komentar
 * @property string $date_created
 *
 * @property Berita $berita
 */
class Komentar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'komentar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_berita'], 'integer'],
            [['isi_komentar'], 'string'],
            [['date_created'], 'safe'],
            [['nama', 'email'], 'string', 'max' => 100],
            [['id_berita'], 'exist', 'skipOnError' => true, 'targetClass' => Berita::className(), 'targetAttribute' => ['id_berita' => 'id_berita']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_komentar' => 'Id Komentar',
            'id_berita' => 'Id Berita',
            'nama' => 'Nama',
            'email' => 'Email',
            'isi_komentar' => 'Isi Komentar',
            'date_created' => 'Date Created',
        ];
    }

    /**
     * Gets query for [[Berita]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBerita()
    {
        return $this->hasOne(Berita::className(), ['id_berita' => 'id_berita']);
    }
}
