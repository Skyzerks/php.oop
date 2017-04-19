<h1><?=$data['section']->getTitle()?> Topics</h1>
<?php var_dump($data['topics'])  ?>

<form action="post">
    <input type="text" name="section[newTitle]" placeholder="Тема">
    <button type="submit">Створити</button>
</form>

<ul>
    <?php foreach($data['topics'] as $topic){ ?>

            <li><a href="/section/<?=$data['section']->getSlug()?>"><?=$topic->getTitle()?></a></li>

    <?php }?>
</ul>