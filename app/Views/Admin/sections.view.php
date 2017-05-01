sections view page

<table style="border-collapse: collapse;">

    <?php $k=0; ?>

    <tr  style="border-collapse: collapse;">
        <td style="border: solid 1px black; padding: 10px">
            Number
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Title
        </td>
<!--        <td style="border: solid 1px black; padding: 10px">-->
<!--            Slug-->
<!--        </td>-->
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
    </tr>
    <?php foreach( $data['sections'] as $section) { ?>
        <?php $k++; ?>

        <tr  style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">
                <?= $k ?>
            </td>
            <td style="border: solid 1px black;  padding: 10px">
                <a href="/section/<?=$section['slug']?>"><?= $section['title'] ?></a>
            </td>
<!--            <td style="border: solid 1px black; padding: 10px">-->
<!--                --><?//= $section['slug'] ?>
<!--            </td>-->
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/user?method=edit&id=<?=$section['id']?>">Редагувати</a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <!--                <form action="/admin/user" method="post">-->
                <!--                    <input type="hidden" name="method" value="delete">-->
                <!--                    <input type="hidden" name="id" value="--><?//=$user['id']?><!--">-->
                <!--                    <button type="submit">Delete</button>-->
                <!--                </form>-->
                <a href="/admin/user?method=delete&id=<?=$section['id']?>">Видалити</a>
            </td>
        </tr>
    <?php } ?>

</table>