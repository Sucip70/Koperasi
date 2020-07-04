<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "periode".
 *
 * @property int $id_periode
 * @property int $periode
 * @property string $keterangan
 *
 * @property AnggotaPeriode[] $anggotaPeriodes
 */
class Periode extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'periode';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_periode', 'periode', 'keterangan'], 'required'],
            [['id_periode', 'periode'], 'integer'],
            [['keterangan'], 'string', 'max' => 255],
            [['id_periode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_periode' => 'Id Periode',
            'periode' => 'Periode',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[AnggotaPeriodes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnggotaPeriodes()
    {
        return $this->hasMany(AnggotaPeriode::className(), ['id_periode' => 'id_periode']);
    }
}
