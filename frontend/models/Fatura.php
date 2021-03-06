<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "fatura".
 *
 * @property integer $id
 * @property integer $numero
 * @property string $data
 * @property string $imagem_path
 *
 * @property FaturaCliente[] $faturaClientes
 * @property FaturaEmpresa[] $faturaEmpresas
 * @property LinhaFatura[] $linhaFaturas
 */
class Fatura extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fatura';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero'], 'required'],
            [['numero'], 'integer'],
            [['data'], 'safe'],
            [['imagem_path'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numero' => 'Numero',
            'data' => 'Data',
            'imagem_path' => 'Imagem Path',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaturaClientes()
    {
        return $this->hasMany(FaturaCliente::className(), ['id_fatura' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaturaEmpresas()
    {
        return $this->hasMany(FaturaEmpresa::className(), ['id_fatura' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLinhaFaturas()
    {
        return $this->hasMany(LinhaFatura::className(), ['id_fatura' => 'id']);
    }
}
