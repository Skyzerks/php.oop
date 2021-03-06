<?php

namespace App\Controllers;


use App\Controllers\Controller;
use App\Framework\View;
use App\Models\Post;
use App\Models\User;
use App\Framework\Auth\Auth;

class AccountController extends Controller
{

    public function showAccount()
    {
        var_dump($_SESSION);

        $user_posts=(new user)->posts();
        $user = Auth::getLoggedUser();
//        var_dump($user);
//        var_dump($user_posts);
//        exit();

        //TODO: Account
//        var_dump($posts);

        View::show('account', ['user_posts'=> $user_posts]);
    }

    public function showUserPosts() {
//        $routeData = Routing::getRouteArgs();
        $userId = $_SESSION['user_id'];

        $topic = Topic::get( $topicId)[0];
        $posts = Post::getTopicsByUser_id( $userId);

//        var_dump( Routing::getRouteArgs() );

        View::show("topic", ['posts' => $posts, 'topic' => $topic]);
    }

}