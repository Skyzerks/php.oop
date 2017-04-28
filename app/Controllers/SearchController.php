<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Post;
use App\Framework\View;
use App\Database\DB;

class SearchController extends Controller
{
    public function showResults() {

        $searchPhrase = $_GET['find'];
//        $results = Post::searchLikeText($searchPhrase);

//        var_dump();
//        exit();
//        $results[] = Post::getByText($resultArray[0]->getText())[0]->getText();
        $results = DB::select("SELECT t.title, t.id, s.slug, p.text FROM `posts` p
            LEFT JOIN `topics` t ON p.topic_id = t.id
            LEFT JOIN `sections` s ON t.section_id = s.id
            WHERE p.`text` LIKE '%$searchPhrase%' OR t.title LIKE '%$searchPhrase%' OR s.title LIKE '%$searchPhrase%' 
            GROUP BY t.id");


//        var_dump($select);
//        exit();

//        echo "You tried to search: ".$results.'</br>';

        //TODO: search function

        View::show("search", ['results' => $results]);
    }
}