<?php

namespace App\Controllers;


use App\Controllers\Controller;
use App\Framework\View;

class AccountController extends Controller
{

    public function showAccount()
    {

        //TODO: Account

        View::show('account');
    }

    public function showUserPosts() {
//        $routeData = Routing::getRouteArgs();
        $userId = $_SESSION['user_id'];

        $topic = Topic::get( $topicId)[0];
        $posts = Post::getTopicsByUser_id( $userId);

//        var_dump( Routing::getRouteArgs() );

        View::view("topic", ['posts' => $posts, 'topic' => $topic]);
    }

}