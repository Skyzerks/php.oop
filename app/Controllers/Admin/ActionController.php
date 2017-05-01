<?php
namespace App\Controllers\Admin;


use App\Controllers\Controller;
use App\Database\DB;

class ActionController extends Controller
{
    public function create(){
        echo 'method create';
        exit();
    }

    public function delete(){
        echo 'method delete';
        exit();
    }

    public function update(){
        echo 'method edit';
        exit();
    }
}