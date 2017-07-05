<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 05.07.2017
 * Time: 10:37
 */
//\yii\helpers\VarDumper::dump($comments);
//exit();
?>
<h1>комментарии</h1>
<ul>
    <?php foreach ($comments as $comment):?>
        <li><b><?=$comment->name?>:</b><?=$comment->text?></li>
    <?php endforeach; ?>
</ul>