<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%medicine}}`.
 */
class m250725_091443_create_medicine_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%medicine}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'category' => $this->string(100),
            'description' => $this->text(),
            'dosage_form' => $this->string(100),
            'strength' => $this->string(50),
            'price' => $this->decimal(10, 2),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'image' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%medicine}}');
    }
}