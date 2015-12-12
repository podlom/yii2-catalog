<?php

namespace brussens\modules\catalog\behaviors;


class NestedSetsBehavior extends \creocoder\nestedsets\NestedSetsBehavior
{
    /**
     * Creates the root node if the active record is new or moves it
     * as the root node.
     * @return bool|\yii\db\ActiveRecord
     */
    public function makeRoot()
    {
        $this->operation = self::OPERATION_MAKE_ROOT;

        return $this->owner;
    }

    /**
     * Creates a node as the first child of the target node if the active
     * record is new or moves it as the first child of the target node.
     * @param \yii\db\ActiveRecord $node
     * @return bool|\yii\db\ActiveRecord
     */
    public function prependTo($node)
    {
        $this->operation = self::OPERATION_PREPEND_TO;
        $this->node = $node;

        return $this->owner;
    }

    /**
     * Creates a node as the last child of the target node if the active
     * record is new or moves it as the last child of the target node.
     * @param \yii\db\ActiveRecord $node
     * @return bool|\yii\db\ActiveRecord
     */
    public function appendTo($node)
    {
        $this->operation = self::OPERATION_APPEND_TO;
        $this->node = $node;

        return $this->owner;
    }

    /**
     * Creates a node as the previous sibling of the target node if the active
     * record is new or moves it as the previous sibling of the target node.
     * @param \yii\db\ActiveRecord $node
     * @return bool|\yii\db\ActiveRecord
     */
    public function insertBefore($node)
    {
        $this->operation = self::OPERATION_INSERT_BEFORE;
        $this->node = $node;

        return $this->owner;
    }

    /**
     * Creates a node as the next sibling of the target node if the active
     * record is new or moves it as the next sibling of the target node.
     * @param \yii\db\ActiveRecord $node
     * @return bool|\yii\db\ActiveRecord
     */
    public function insertAfter($node)
    {
        $this->operation = self::OPERATION_INSERT_AFTER;
        $this->node = $node;

        return $this->owner;
    }
}