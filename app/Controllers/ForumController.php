<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Section;
use App\Models\Topic;
use App\Models\Post;
use App\Models\User;
use App\Framework\Routing;

use App\Framework\View;
use App\Database\DB;


class ForumController extends Controller
{

    public function showTopic() {
        $routeData = Routing::getRouteArgs();
        $sectionSlug = $routeData[2];
        $topicId = $routeData[3];

        $topic = Topic::get( $topicId)[0];
        $posts = Post::getByTopic_Id( $topicId );

//        var_dump( Routing::getRouteArgs() );

        View::view("topic", ['posts' => $posts, 'topic' => $topic]);
    }

    public function showSection() {

        $routeData = Routing::getRouteArgs();
        $sectionSlug = $routeData[2];

        $section = Section::getBySlug( $sectionSlug)[0];
        $topics = Topic::getBySection_Id( $section->getId() );

//        $section = DB::select( 'SELECT * FROM sections WHERE slug = ?', [$sectionSlug] );
//        var_dump( $section[0] );
//
//        $topics = DB::select(
//                   'SELECT * FROM topics  WHERE section_id = ?',
//            [$section[0]['id']]
//        );
//        var_dump( $topics[0] );

        View::show("section", ['section'=> $section, 'topics' => $topics]);
    }
    
}