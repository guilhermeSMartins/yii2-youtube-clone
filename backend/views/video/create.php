<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="d-flex flex-column justify-content-center align-items-center">

    <h1><?= Html::encode($this->title) ?></h1>

    <div>
        <div class="upload-icon">
            <i class="fas fa-upload"></i>
        </div>
        <p>Drag and drop a file you want to upload</p>
        <p class="text-muted">Your video will be private until you publish it</p>

        <button class="btn btn-primary btn-file">
            Select File

            <input type="file" name="video" id="videoFile">
        </button>
    </div>

</div>
