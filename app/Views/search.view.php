

<?php var_dump($data['results'][0]);  ?>

<ul>
    <?php foreach($data['results'] as $result){ ?>

        <li><a href="/section/<?=$result['slug']?>"><?=$result['title']?></a></li>

<!--        --><?php //var_dump($result->getText()); ?>

    <?php }?>
</ul>



<!--TODO: search results-->