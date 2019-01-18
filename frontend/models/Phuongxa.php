<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for collection "phuongxa".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $TinhThanhPho
 * @property mixed $MaTP
 * @property mixed $QuanHuyen
 * @property mixed $MaQH
 * @property mixed $PhuongXa
 * @property mixed $MaPX
 * @property mixed $Cap
 * @property mixed $TenTiengAnh
 */
class Phuongxa extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['yii2db', 'phuongxa'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'TinhThanhPho',
            'MaTP',
            'QuanHuyen',
            'MaQH',
            'PhuongXa',
            'MaPX',
            'Cap',
            'TenTiengAnh',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TinhThanhPho', 'MaTP', 'QuanHuyen', 'MaQH', 'PhuongXa', 'MaPX', 'Cap', 'TenTiengAnh'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'TinhThanhPho' => 'Tỉnh Thành Phố',
            'MaTP' => 'Mã TP',
            'QuanHuyen' => 'Quận Huyện',
            'MaQH' => 'Mã QH',
            'PhuongXa' => 'Phường Xã',
            'MaPX' => 'Mã PX',
            'Cap' => 'Cấp',
            'TenTiengAnh' => 'Tên Tiếng Anh',
        ];
    }
}
