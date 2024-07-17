<?php

namespace app\models;

use yii\mongodb\ActiveRecord;

class Post extends ActiveRecord
{
    public static function collectionName()
    {
        return ['test', 'posts'];
    }

    public function attributes()
    {
        return ['_id', 'title', 'content', 'created_at'];
    }
}