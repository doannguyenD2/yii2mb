<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class TestController extends Controller
{
    public function actionWelcome()
    {
       Yii::$app->mycomponent->welcome();
    }

}
?>