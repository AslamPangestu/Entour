<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mobil".
 *
 * @property integer $id
 * @property string $merek_mobil
 * @property string $kapasitas
 * @property string $palt
 *
 * @property Driver[] $drivers
 */
class Mobil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mobil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['merek_mobil', 'kapasitas', 'palt'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merek_mobil' => 'Merek Mobil',
            'kapasitas' => 'Kapasitas',
            'palt' => 'Palt',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrivers()
    {
        return $this->hasMany(Driver::className(), ['id_mobil' => 'id']);
    }
}
