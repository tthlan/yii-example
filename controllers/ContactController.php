<?php

namespace app\controllers;

use Yii;
use yii\mongodb\Query;
use yii\web\Controller;
use app\models\Post;

class ContactController extends Controller
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

    public function actionView($id){
        die($id);
    }

    public function actionUpdate(){
        die('update....');
    }

    public function actionPostbyemail($id){

        // MongoDB collection
        $collection = Yii::$app->mongodb->getCollection('posts');

        // Aggregation pipeline
        $pipeline = [
            [
                '$lookup' => [
                    'from' => 'contact',
                    'localField' => 'email',
                    'foreignField' => 'email',
                    'as' => 'contact',
                ],
            ],
            [
                '$project' => [ // hiển thị những trường nào
                    'email' => 1,
                    'title' => 1,
                    'name' => '$contact.name', // cột ở bảng khác $collection
                ],
            ],
            [
                '$match' => [ // điều kiện lọc
                    //'email' => 'greg_powell@fake-mail.com',  // Replace with your actual condition
                    //'scores' => 95,  // Replace with your actual condition
                    'title' => 'My First Post - 1st',  // Replace with your actual condition
                ],
            ],
        ];

        // Execute aggregation
        $postsWithComments = $collection->aggregate($pipeline);

        foreach ($postsWithComments as $document) {
            echo "Post: " . $document['email'] . "<br>";
            echo "Post: " . $document['title'] . "<br>";
            echo "Post: " . $document['name'][0] . "<br>";
        }


        die("GetPostByEmail");
    }
}