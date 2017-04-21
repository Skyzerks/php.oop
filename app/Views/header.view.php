<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Forum</title>
</head>
<body>
<header>
    <ul>
        <li><a href="/">Forum (Main)</a></li>
        <?php if(isset($_SESSION['user_id'])){?> <li><a href="/account">My account</a></li> <?php } ?>
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