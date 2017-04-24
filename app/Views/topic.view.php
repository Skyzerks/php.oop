<?php var_dump($data['posts']); ?>

<h1><?= $data['topic'][0]->getTitle() ?></h1>

<form action="post">
    <textarea name="topic[newMessage]" id="" cols="30" rows="3"></textarea>
    <button type="submit">Написати</button>
</form>

<hr>

<h2>Повідомлення:</h2>

<?php foreach( $data['posts'] as $post ) { ?>

    <?=$post->getText() ?>
    <br>
    <small><?=$post->getCreated_at() ?></small>

    <br>
    <br>

<?php } ?>