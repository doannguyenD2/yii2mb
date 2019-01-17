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
        $collection = Yii::$app->mongodb->getCollection('customertest');

        for($x=1; $x<=1000000; $x++)
        {
            $ho = array("Nguyen","Tran","Dinh","Le","Thu","Pham","Hoang","Huynh","Phan","Vu","Vo","Dang","Bui","Ngo","Duong","Duong");
            $dem = array("Duc","Ngoc","Linh","Thi","Lai","Tien","Tai","Danh","Sang","Van","Vu");
            $ten = array("Tho","Doan","Dung","Bui","Dam","Em","La","Em","Gai","Mua","Anh","Trai","Nung","Khoang","Troi","Dinh");
            
            $xh=rand(0, 14);
            $xd=rand(0,10);
            $xt=rand(0,15);
            $sm = rand(1,10000);
            
            $name= $ho[$xh]." ".$dem[$xd]." ".$ten[$xt];
            $email = $ten[$xt].$ho[$xh].$sm."@gmail.com";
            
            $items = strval($x);
            $id= "id".$items."x";

            $collection->insert(['myid'=> $id, 'name' => $name,'email' => $email, 'address'=>$items, 'status' => 1]);
        
        // $collection->insert(['fname' => 'Oh','lname'=>'fuck_that_shit', 'status' => 0,'addr'=>['street'=>'Toyota','city'=>'HN', 'state'=>'VN', 'zip'=>12345]]);
        }
        echo 'one!';

        // return $this->render('index');
        //Url::to(['view','id'=>(string) $model->_id]);
        }
}
