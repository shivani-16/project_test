<?php
use yii\helpers\Html;

?>

<p>You have entered following info:</p>
<ul>
    <li>
        <label>Username:</label><?= Html::encode($model->name) ?>
    </li>
    <li>
        <label>Email:</label><?= Html::encode($model->email) ?>
    </li>
</ul>
<p>We will add this username in our database. Thank You!</p>
