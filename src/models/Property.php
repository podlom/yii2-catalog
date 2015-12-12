<?php

namespace brussens\modules\catalog\models;


use yii\db\ActiveRecord;

class Property extends ActiveRecord
{
    const TYPE_INTEGER = 1;
    const TYPE_STRING = 2;
    const TYPE_BOOLEAN = 3;
}