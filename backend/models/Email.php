<?php

namespace backend\models;

use yii\db\ActiveRecord;

class Email extends ActiveRecord
{
    public static function tableName()
    {
        return 'email';
    }
}
