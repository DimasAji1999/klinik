<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "layanan".
 *
 * @property int $id
 * @property int $id_pasien
 * @property int $id_dokter
 * @property int $id_kategori
 * @property string $keluhan
 * @property string $solusi
 *
 * @property Dokter $dokter
 * @property Kategori $kategori
 * @property Pasien $pasien
 */
class Layanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'layanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_dokter', 'id_kategori', 'keluhan', 'solusi'], 'required'],
            [['id_pasien', 'id_dokter', 'id_kategori'], 'integer'],
            [['keluhan', 'solusi'], 'string', 'max' => 500],
            [['id_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['id_dokter' => 'id']],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::class, 'targetAttribute' => ['id_kategori' => 'id']],
            [['id_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['id_pasien' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pasien' => 'Nama Pasien',
            'id_dokter' => 'Nama Dokter',
            'id_kategori' => 'Jenis Penyakit',
            'keluhan' => 'Keluhan',
            'solusi' => 'Solusi',
        ];
    }

    /**
     * Gets query for [[Dokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDokter()
    {
        return $this->hasOne(Dokter::class, ['id' => 'id_dokter']);
    }

    /**
     * Gets query for [[Kategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::class, ['id' => 'id_kategori']);
    }

    /**
     * Gets query for [[Pasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasien()
    {
        return $this->hasOne(Pasien::class, ['id' => 'id_pasien']);
    }
}
