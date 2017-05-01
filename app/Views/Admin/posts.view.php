posts view page <br>

<?php var_dump($data['topics'][0]); ?>

<table style="border-collapse: collapse;">

    <?php $k=0; ?>

    <tr  style="border-collapse: collapse;">
        <td style="border: solid 1px black; padding: 10px">
            Number
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Text
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Topic id
        </td>
        <td style="border: solid 1px black; padding: 10px">
            User id
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
    </tr>
    <?php foreach( $data['posts'] as $key => $post) { ?>
        <?php $k++; ?>

        <tr  style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">
                <?= $k ?>
            </td>
            <td style="border: solid 1px black;  padding: 10px">
                <a href="/admin/user?method=view&id=<?=$post['id']?>"><?= $post['text'] ?></a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $data['topics'][$key][0]['title']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $post['user_id'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/user?method=edit&id=<?=$post['id']?>">Редагувати</a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <!--                <form action="/admin/user" method="post">-->
                <!--                    <input type="hidden" name="method" value="delete">-->
                <!--                    <input type="hidden" name="id" value="--><?//=$user['id']?><!--">-->
                <!--                    <button type="submit">Delete</button>-->
                <!--                </form>-->
                <a href="/admin/user?method=delete&id=<?=$post['id']?>">Видалити</a>
            </td>
        </tr>
    <?php } ?>

</table>