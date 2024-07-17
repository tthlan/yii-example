<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Post;

class PostController extends Controller
{
    public function actionCreate()
    {
        $post = new Post();
        $post->title = 'My First Post';
        $post->content = 'This is the content of my first post.';
        $post->created_at = new \MongoDB\BSON\UTCDateTime();

        if ($post->save()) {
            return 'Post created successfully!';
        } else {
            return 'Failed to create post.';
        }
    }
}