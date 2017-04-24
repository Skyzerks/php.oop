<h1><?=$data['section']->getTitle()?> Topics</h1>
<?php var_dump($data)  ?>

<form action="post">
    <input type="text" name="section[newTitle]" placeholder="Тема">
    <button type="submit">Створити</button>
</form>

<ul>
    <?php foreach($data['topics'] as $topic){ var_dump($topic) ?>
            <li><a href="/section/<?=$data['section']->getSlug()?>/<?=$topic->getId()?>"><?=$topic->getTitle()?></a></li>

    <?php }?>
</ul>