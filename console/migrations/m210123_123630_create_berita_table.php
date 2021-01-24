<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%berita}}`.
 */
class m210123_123630_create_berita_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%berita}}', [
            'id_berita' => $this->primaryKey(11),
            'judul' => $this->string(),
            'isi_berita' => $this->text(),
            'id_kategori' => $this->integer(11),
            'jml_baca' => $this->integer(11),
            'id_user' => $this->integer(11),
            'date_created' => $this->timestamp()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%berita}}');
    }
}
