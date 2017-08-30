<?php

use yii\db\Schema;
use yii\db\Migration;

class m180510_064910_create_slider_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions =
                'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('slider', array(
            'id' => $this->primaryKey(),
            'language' => $this->string(),
            'title' => $this->string()->notNull(),
            'description' => $this->string(),
            'isActive' => $this->boolean()->defaultValue(1),
            'galleryId' => $this->integer(),
            'createdAt' => $this->integer(),
            'updatedAt' => $this->integer(),
        ), $tableOptions);
        $this->addForeignKey('slider_gallery', 'slider', 'galleryId', 'gallery', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('slider_gallery', 'slider');
        $this->dropTable('slider');
    }

}
