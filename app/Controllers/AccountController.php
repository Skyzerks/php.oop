<?php

namespace App\Controllers;


use App\Framework\View;

class AccountController extends Controller
{

    public function showAccount()
    {
        echo __DIR__."<br>";
        echo "TODO: Account";

        View::show('account');
    }

}