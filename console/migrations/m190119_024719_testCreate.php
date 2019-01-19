<?php

class m190119_024719_testCreate extends \yii\mongodb\Migration
{
    public function up()
    {
        return $this->createCollection('testCreate',[]);
    }


    public function down()
    {
        echo "m190119_024719_testCreate can be reverted.\n";

        return true;
    }
}
