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

/* test 'post' table 's data
[{
  "_id": {
    "$oid": "669754721396cacb500b2dd2"
  },
  "title": "My First Post - 1st",
  "content": "This is the content of my first post.",
  "created_at": {
    "$date": "2024-07-17T05:19:46.224Z"
  },
  "email": "greg_powell@fake-mail.com"
},
{
  "_id": {
    "$oid": "66979394c906f6d09aaa3b16"
  },
  "title": "My Second Post - 2st",
  "content": "This is the content of my second post.",
  "created_at": {
    "$date": "2024-07-17T05:19:46.224Z"
  },
  "email": "andrea_le@fake-mail.com"
}]
*/