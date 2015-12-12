<?php

use yii\db\Migration;

class m151212_051338_category_init extends Migration
{

    /**
     * Table name
     * @var string
     */
    public $tableName = '{{%catalog_category}}';

    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'body' => $this->text(),
            'slug_suffix' => $this->string()->notNull(),
            'slug' => $this->string()->notNull()->unique(),

            // Tree
            'lft' => $this->integer()->notNull(),
            'rgt' => $this->integer()->notNull(),
            'depth' => $this->integer()->notNull(),
            'tree' => $this->integer()->notNull(),
            'parent_id' => $this->integer(),

            // Meta data
            'title_meta' => $this->string(),
            'description_meta' => $this->string(),
            'keywords_meta' => $this->string(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
