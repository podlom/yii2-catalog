<?php

use yii\db\Migration;

class m151212_051708_product_init extends Migration
{
    /**
     * Table name
     * @var string
     */
    public $tableName = '{{%catalog_product}}';

    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'slug' => $this->string()->notNull()->unique(),
            'title' => $this->string()->notNull(),
            'body' => $this->text(),
            'category_id' => $this->integer()->notNull(),
            'status' => $this->integer()->notNull(),
            'cost' => $this->money()->defaultValue(0),

            // Meta data
            'title_meta' => $this->string(),
            'description_meta' => $this->string(),
            'keywords_meta' => $this->string(),
        ]);

        $this->addForeignKey('fk-catalog_product-catalog_category-id', $this->tableName, 'category_id', '{{%catalog_category}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
