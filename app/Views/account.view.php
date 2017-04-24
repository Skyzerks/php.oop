<form id="authForm" action="/account" method="POST">
    <input type="text" name="name" placeholder="Login"> <br/>
    <input type="text" name="email" placeholder="Email"> <br/>
    <input type="text" name="password" placeholder="Password"> <br/>


    <input type="submit" value="Change"><br/>
</form>

<?php var_dump($data['user_posts']); ?>

<?php foreach( $data['user_posts'] as $post ) { ?>

    <?=$post->getText() ?>
    <br>
    <small><?=$post->getCreated_at() ?></small>

    <hr>

<?php } ?>
