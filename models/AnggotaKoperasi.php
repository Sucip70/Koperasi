<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anggota_koperasi".
 *
 * @property int $id_anggota
 * @property string $nama_anggota
 * @property int $periode
 * @property string $alamat
 * @property int $no_telp
 */
class AnggotaKoperasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anggota_koperasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_anggota', 'nama_anggota', 'periode', 'alamat', 'no_telp'], 'required'],
            [['id_anggota', 'periode', 'no_telp'], 'integer'],
            [['nama_anggota', 'alamat'], 'string', 'max' => 255],
        ];
    }

    public static function primaryKey()
    {
        return array('id_anggota');
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_anggota' => 'Id Anggota',
            'nama_anggota' => 'Nama Anggota',
            'periode' => 'Periode',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
        ];
    }
}
