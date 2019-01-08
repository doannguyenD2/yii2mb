<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
       Yii::$app->mycomponent->execute();
    }
}
?>