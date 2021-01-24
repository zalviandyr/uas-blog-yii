<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%komentar}}`.
 */
class m210123_130533_create_komentar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%komentar}}', [
            'id_komentar' => $this->primaryKey(11),
            'id_berita' => $this->integer(11),
            'nama' => $this->string(100),
            'email' => $this->string(100),
            'isi_komentar' => $this->text(),
            'date_created' => $this->timestamp()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%komentar}}');
    }
}
