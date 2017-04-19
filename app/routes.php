<?php

$_routes = [

    '/' => ['handler' => ['MainController','index']],

    '/section/([a-z]*)/([0-9]+)' => ['handler' => ['ForumController','showTopic']],
    '/section/([a-z]*)' => ['handler' => ['ForumController','showSection']],
    '/login' => ['handler'=>['AuthController', 'login']],
    '/registration' => ['handler'=>['AuthController', 'registration']],
    '/account' => ['handler'=>['AccountController', 'showAccount']]



];