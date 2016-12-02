<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
use yii\helpers\BaseUrl;
use yii\helpers\Url;

/**
 * This is the model class for table "menu".
 *
 * @property string $id_menu
 * @property string $nameMenu
 * @property string $actionMenu
 * @property boolean $topBottom
 * @property menuImg $menuImg
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nameMenu', 'actionMenu'], 'required'],
            [['topBottom'], 'boolean'],
            [['nameMenu', 'actionMenu','menuImg'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_menu' => 'Id Menu',
            'nameMenu' => 'Name Menu',
            'actionMenu' => 'Action Menu',
            'topBottom' => 'Top Bottom',
        	'menuImg' => 'Menu Img',
        ];
    }
    
    
    
    public function getList($btTop)
    {
    	
    	$mass=[];
    	
    	$i=0;
    	$arr=$this->findAll(['topBottom'=>$btTop]);
    $img ='';
    	foreach ( $arr  as $val)
    	{
    	    	 
    		if ($val['menuImg']=='')
    				{
    					$mass[$i]['label']=$val['nameMenu'];
    		}
    		else
    		{
    			
    
    			$mass[$i]['label']=Html::tag('span','', [  'class'=>$val['menuImg']]   ).' '.$val['nameMenu'];
    		}

    		$mass[$i]['url']= $val['actionMenu'] ;
    	     
    	$i++;
    	
    	}
    	
    	return $mass;
    }
    
}
