<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\NavTest;
use yii\widgets\LinkPager;

$this->title = 'Таблица';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

   <div>
    </div>
    <?
     if(Yii::$app->user->isGuest) {  
        echo "AAAAAAAAAAAAAA";
        } else {
          ?>  
          
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">    
               <thead>
                   <tr>
                    <th>Код</th>
                    <th>Название</th>
                    <th>Население</th>
                   </tr>
                    
              </thead>
               <tbody>
                <?php foreach ($countries as $country){
                          ?><tr>

                              <th><? print_r($country["code"]);?></th>
                              <th><? print_r($country["name"]);?></th>
                              <th><? print_r($country["population"]);?></th>
                              
                          </tr
                         <?
                        }
                ?>
              </tbody>
              </table><?
         echo LinkPager::widget(['pagination' => $pagination]);
        
        }
        ?>
</div>

