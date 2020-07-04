<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anggota_periode".
 *
 * @property int $id_anggota
 * @property int $id_periode
 * @property string $nama_anggota
 * @property string $alamat
 * @property int $no_telp
 *
 * @property Periode $periode
 */
class AnggotaPeriode extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anggota_periode';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_anggota', 'id_periode', 'nama_anggota', 'alamat', 'no_telp'], 'required'],
            [['id_anggota', 'id_periode', 'no_telp'], 'integer'],
            [['nama_anggota', 'alamat'], 'string', 'max' => 255],
            [['id_anggota'], 'unique'],
            [['id_periode'], 'exist', 'skipOnError' => true, 'targetClass' => Periode::className(), 'targetAttribute' => ['id_periode' => 'id_periode']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_anggota' => 'Id Anggota',
            'id_periode' => 'Id Periode',
            'nama_anggota' => 'Nama Anggota',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
        ];
    }

    /**
     * Gets query for [[Periode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeriode()
    {
        return $this->hasOne(Periode::className(), ['id_periode' => 'id_periode']);
    }
}
