<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap Core CSS -->
    <link href="/app/views/template/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
<!--    <link href="/app/views/template/css/shop-homepage.css" rel="stylesheet">-->
    <!-- jQuery -->
<!--    <script src="/app/views/template/js/jquery.js"></script>-->
    <!-- Bootstrap Core JavaScript -->
    <script src="/app/views/template/js/bootstrap.min.js"></script>
    <title>Forum</title>
</head>
<body>
<div class="container">
<header>
    <?php $config = self::$config; ?>
    <ul>
        <a href="https://oauth.vk.com/authorize?client_id=<?=$config->get('vk_info.client_id')?>&display=page&redirect_uri=<?=$config->get('vk_info.redirect_uri')?>&code=&response_type=code&v=5.63&scope=email" target="_blank">VK login</a>
        <li><a href="/">Forum (Main)</a></li>
        <?php if(isset($_SESSION['user_id'])){?> <li><a href="/account">My account</a></li> <?php } ?>
<!--        <li><a href="/vkAuth">VK login</a></li>-->
        <?php if(!isset($_SESSION['user_id'])){?>
            <li><a href="/login">login</a></li>
            <li><a href="/registration">registration</a></li>
        <?php } else { ?> <li><a href="/logout">logout</a></li> <?php } ?>
        <form action="/search" method="get">
            <input type="text" name="find" placeholder="Find yeti">
            
            <input type="submit" value="Find"><br/>
        </form>
    </ul>
</header>