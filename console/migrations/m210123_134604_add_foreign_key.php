<?php

use yii\db\Migration;

/**
 * Class m210123_134604_add_foreign_key
 */
class m210123_134604_add_foreign_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk-berita-id_kategori',
            'berita',
            'id_kategori',
            'kategori',
            'id_kategori',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-komentar-id_berita',
            'komentar',
            'id_berita',
            'berita',
            'id_berita',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-berita-id_user',
            'berita',
            'id_user',
            'zukron_alviandy_r_1811081030',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-berita-id_kategori', 'berita');

        $this->dropForeignKey('fk-komentar-id_berita', 'komentar');

        $this->dropForeignKey('fk-berita-id_user', 'berita');
    }
}
