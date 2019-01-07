<?php
namespace console\controllers;
use Yii;
use yii\console\Controller;

Class OneController extends Controller{
    public function actionIndex(){
        echo 'one!';
        return true;
    }
}
?>