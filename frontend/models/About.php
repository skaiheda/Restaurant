<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class About extends ActiveRecord
{
    public static function tableName()
    {
        return 'about';
    }
}
