<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
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
<header>

   
   <div class="container">
    <?php
    NavBar::begin([
        'brandLabel' => '' ,
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
    
 <div class="second-line">
     <div class="container">
         <div class="row">
             <div class="left">
               <?= Html::beginTag('a',  ['href' => Url::to()]); ?>
               <?php   echo Html::img('@web/img/logo.png');  ?>
               <span>Интернет провайдер</span>
               <?= Html::endTag('a')  ?>      
             </div>
             <div class="right">
             	<span> 8 (3496) 300-354</span>
             </div>
         </div>
     </div>
</div>    

<div class="three-line">
    <div class="container">
        <div class="row">
            <div  class="nav">
<?php  
    echo Nav::widget([
        'options' => ['class' => 'nav-pills  nav-justified nav-border'],
        'items' =>   \Yii::$app->params[ 'menuBottom' ],
    	'encodeLabels' => false,
    ]);
    
    
    ?>
            </div>
        </div>
    </div>
</div>
</header>

<div id="slide" class="color1">
	<div class="container"> 

	<?php  echo  Carousel::widget([
			
    'items' => [
    		
    		
        // the item contains only the image
        //   Html::img('img\accord\present.png',['class'=>'']) ,
        // equivalent to the above
        ['content' => '<div class="slide"> </div>'],
        // the item contains both the image and the caption
        [
            'content' => '<div class="slide"> '.Html::img('@web/img/accord/present.png',['class'=>'imgslide']).'</div>',
            'caption' => '',
        
        ],
    	[
    		'content' => '<div class="slide"> </div>',
    		'caption' => '',
    		
    	],
    		
    ],	
			'controls' => [
					'<div class="glyphicon glyphicon-chevron-left" aria-hidden="true"></div>',
					'<div class="glyphicon glyphicon-chevron-right" aria-hidden="true"></div>'
			]
]);
	?>
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
