<?php

// namespace app\command;
namespace console\components;

use Yii;
use yii\base\Component;
use yii\base\Model;
use yii\base\NotSupportedException;
use yii\db\Command;
use yii\mongodb\Connection;
use yii\mongodb\Collection;
use yii\mongodb\Query;
use yii\base\BaseObject;
use yii\console\Controller;
use yii\base\InvalidConfigException;

//Sử dụng yii2 tạo 1tr user tự động

class MyComponent extends Component
{
    public function execute(){

        echo 'one!';
        $collection = Yii::$app->mongodb->getCollection('newcus');

        for($x=1; $x<=1000000; $x++)
        {
        $items = strval($x);
        $name = "ten thu ".$items;
        $email = "taola".$items."@gmail.com";
        $id = "id".$items."x";
        $collection->insert(['myid'=> $id, 'name' => $name,'email' => $email, 'address'=>$items, 'status' => 1]);
        
        // $collection->insert(['fname' => 'Oh','lname'=>'fuck_that_shit', 'status' => 0,'addr'=>['street'=>'Toyota','city'=>'HN', 'state'=>'VN', 'zip'=>12345]]);
        }
        echo 'one!';

        // return $this->render('index');
        //Url::to(['view','id'=>(string) $model->_id]);
        }
}
