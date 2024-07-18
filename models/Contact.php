<?php

namespace app\models;

use yii\mongodb\ActiveRecord;

class Contact extends ActiveRecord
{
    public static function collectionName()
    {
        return ['test', 'contact'];
    }

    public function attributes()
    {
        return ['_id', 'name', 'email', 'school', 'version', 'scores', 'created_at'];
    }
}

/* test 'contact' table's data
[{
  "_id": {
    "$oid": "66979ccdc906f6d09aaa3b1b"
  },
  "name": "Andrea Le",
  "email": "andrea_le@fake-mail.com",
  "school": {
    "name": "Northwestern"
  },
  "version": 5,
  "scores": [
    85,
    95,
    75
  ],
  "dateCreated": {
    "$date": "2003-03-26T00:00:00.000Z"
  }
},
{
  "_id": {
    "$oid": "66979ccdc906f6d09aaa3b1c"
  },
  "email": "no_name@fake-mail.com",
  "version": 4,
  "scores": [
    90,
    90,
    70
  ],
  "dateCreated": {
    "$date": "2001-04-15T00:00:00.000Z"
  }
},
{
  "_id": {
    "$oid": "66979ccdc906f6d09aaa3b1d"
  },
  "name": "Greg Powell",
  "email": "greg_powell@fake-mail.com",
  "version": 1,
  "scores": [
    65,
    75,
    80
  ],
  "dateCreated": {
    "$date": "1999-02-10T00:00:00.000Z"
  }
}]
  */