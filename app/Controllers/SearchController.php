<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Post;

class SearchController extends Controller
{
    public function showResults() {

        $searchPhrase = $_GET['find'];
        $resultArray = Post::searchLikeText($searchPhrase);

        var_dump($resultArray);
        exit();

        echo "You tried to search: ".$searchPhrase.'</br>';

        //TODO: search function

    }
}