<?php

// namespace app\command;
namespace console\controller;

use Yii;
use yii\base;
use yii\base\Component;
use yii\base\Model;
use yii\base\NotSupportedException;
use yii\db\Command;
use yii\mongodb\Connection;
use yii\mongodb\Collection;
use yii\mongodb\Query;
use yii\base\BaseObject;
// use yii\console\Controller;
use yii\web\NotFoundHttpException;

//Sử dụng yii2 command tạo user noSQL

class Commandtest extends Component
{
    public function execute(){

        $collection = Yii::$app->mongodb->getCollection('Customer');
        
        $collection->insert(['name' => 'Huhu_Help_me','email' => 'full_of_shit', 'address'=>'??', 'status' => 1]);
        
        $collection->insert(['fname' => 'Oh','lname'=>'fuck_that_shit', 'status' => 0,'addr'=>['street'=>'Toyota','city'=>'HN', 'state'=>'VN', 'zip'=>12345]]);
        
        // return $this->render('index');
        //Url::to(['view','id'=>(string) $model->_id]);
        }
}
