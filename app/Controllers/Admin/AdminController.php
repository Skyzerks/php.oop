<?php
namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Framework\View;
use App\Database\DB;

class AdminController extends Controller
{

    public function mainController(){

        View::show('Admin\admin');
    }
    public function postsController(){

        $posts= (DB::select('SELECT * FROM `posts`'));
//        var_dump($posts[0]['topic_id']); exit();
        foreach($posts as $key => $post) {
            $topics[$key] = (DB::select('SELECT * FROM `topics` WHERE `id`=' . $post['topic_id']));
        }
        View::show('Admin\posts', ['posts'=> $posts, 'topics' => $topics]);
    }

    public function sectionsController(){

        $sections= (DB::select('SELECT * FROM `sections`'));

        View::show('Admin\sections', ['sections' => $sections]);
    }

    public function topicsController(){

        $topics = (DB::select('SELECT * FROM `topics`'));

        View::show('Admin\topics', ['topics' => $topics]);
    }

    public function usersController(){

        $users = (DB::select('SELECT * FROM `users`'));


        View::show('Admin\users', ['users'=>$users]);
    }


}