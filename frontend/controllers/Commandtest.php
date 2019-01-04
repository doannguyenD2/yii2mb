<?php

use yii;
use yii\db\Command;

//Sử dụng yii2 tạo 1tr user tự động

class NewCommand extends Command
{
    public function createNew()
    {
        $connection->createCommand()->insert('user', [
            'username' => 'Sam',
            'email' => 'ngunn@dfkdsf.com',
            'age' => '19',
            'creat_at' => '91604012019'
        ])->execute();
    }
}
