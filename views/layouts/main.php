<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Carousel;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="w1rap">
    <?php
    
    
    
    
    
    NavBar::begin([
        'brandLabel' =>  Html::img('@web/img/logonew.png'),
        'brandUrl' => Yii::$app->homeUrl,
    	'brandOptions'=> ['class'=>'logo'],
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    	
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => \Yii::$app->params[ 'menuTop' ],
    	'encodeLabels' => false,
    ]);
    NavBar::end();
    ?>
    
  

</div>

  <div class="">
<div class="panel-group" id="collapse-group">
 <div class="panel panel-default">
 <div class="panel-heading">
 <h4 class="panel-title">
 <a data-toggle="collapse" data-parent="#collapse-group" href="#el1">Первый элемент</a>
 </h4>
 </div>
 <div id="el1" class="panel-collapse collapse in">
 <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
 </div>
 </div>
 <div class="panel panel-default">
 <div class="panel-heading">
 <h4 class="panel-title">
 <a data-toggle="collapse" data-parent="#collapse-group" href="#el2">Второй элемент</a>
 </h4>
 </div>
 <div id="el2" class="panel-collapse collapse">
 <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
 </div>
 </div>
 <div class="panel panel-default">
 <div class="panel-heading">
 <h4 class="panel-title">
 <a data-toggle="collapse" data-parent="#collapse-group" href="#el3">Третий элемент</a>
 </h4>
 </div>
 <div id="el3" class="panel-collapse collapse">
 <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
 </div>
 </div>
</div>
<div class="container">
    <?php  
    echo Carousel::widget ( [
    'items' => [
    [
        'content' => Html::img('@web/img/accord/slide1.jpg'),
        'caption' => '',
        'options' => []
    ],
     [
        'content' => Html::img('@web/img/accord/slide2.jpg'),
        'caption' => '<h2>Отличный отладчик</h2><p>Легко подключается, помнит все запросы http, БД и логи</p>',
        'options' => []
    ],
     [
        'content' => Html::img('@web/img/accord/slide3.jpg'),
        'caption' => '<h2>Быстрый старт</h2><p>Установка и обновление через composer</p>',
        'options' => []
    ]
    ],
       'options' => ['style'=>'width: 100%;']

     
    
]);  
    ?>
    </div>
    <div class="container">
  
    
    
<?php  

    echo Nav::widget([
        'options' => ['class' => 'nav-pills navbar-right'],
        'items' =>   \Yii::$app->params[ 'menuBottom' ],
    	'encodeLabels' => false,
    ]);
    
    
    ?>
   
    </div>
  
  
  </div>  
    
</div>


<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; ООО "Скай-нет" <?= date('Y') ?></p>

       
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
