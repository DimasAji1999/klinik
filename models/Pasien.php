<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id
 * @property string $nama
 * @property int $usia
 * @property string $pekerjaan
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'usia', 'pekerjaan'], 'required'],
            [['usia'], 'integer'],
            [['nama'], 'string', 'max' => 50],
            [['pekerjaan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'usia' => 'Usia',
            'pekerjaan' => 'Pekerjaan',
        ];
    }
}
