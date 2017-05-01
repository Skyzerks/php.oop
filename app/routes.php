<?php

$_routes = [

    '/' => ['handler' => ['MainController','index']],

    '/section/([a-z]*)/([0-9]+)' => ['handler' => ['ForumController','showTopic']],
    '/section/([a-z]*)' => ['handler' => ['ForumController','showSection']],
    '/login' => ['handler'=>['AuthController', 'login']],
    '/logout' => ['handler'=>['AuthController', 'logout']],
    '/registration' => ['handler'=>['AuthController', 'registration']],
    '/account' => ['handler'=>['AccountController', 'showAccount']],
    '/search' => ['handler' => ['SearchController', 'showResults']],
    '/vkAuth' => ['handler' => ['VkController', 'vkCallback']],
    '/vkLogin' => ['handler' => ['VkController', 'vkLogin']],

    '/admin' => ['handler' => ['Admin\AdminController', 'mainController']],
    '/admin/posts' => ['handler' => ['Admin\AdminController', 'postsController']],
    '/admin/sections' => ['handler' => ['Admin\AdminController', 'sectionsController']],
    '/admin/topics' => ['handler' => ['Admin\AdminController', 'topicsController']],
    '/admin/users' => ['handler' => ['Admin\AdminController', 'usersController']],

    '/admin/([a-z]*)?method=edit&id=([0-9]+)' => ['handler' => ['Admin\ActionController', 'update']],
    '/admin/([a-z]*)?method=create' => ['handler' => ['Admin\ActionController', 'create']],
    '/admin/([a-z]*)?method=delete&id=([0-9]+)' => ['handler' => ['Admin\ActionController', 'delete']],

];