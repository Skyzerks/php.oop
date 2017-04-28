<?php
namespace App\Controllers\Admin;

use App\Controllers\Controller;

class ForumController extends Controller
{

    public function create(){
//        TODO: CRUD create func
    }

    public function read(){
//        TODO: CRUD read func
    }

    public function update(Int $id){
        $model = new static;
//        return $model->hydrate(DB::select("UPDATE $model->table SET  `id`=?", [$id]));
    }

    public function delete(Int $id){
        $model = new static;
        return $model->hydrate(DB::select("DELETE * FROM $model->table WHERE `id`=?", [$id]));
    }



}