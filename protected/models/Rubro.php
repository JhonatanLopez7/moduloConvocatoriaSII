<?php

/**
 * This is the model class for table "rubro".
 *
 * The followings are the available columns in table 'rubro':
 * @property integer $codigo
 * @property string $rubro
 * @property string $operacion
 * @property double $porcentaje
 * @property string $variable_de_control
 * @property integer $rubro_convocatoria
 *
 * The followings are the available model relations:
 * @property Convocatoria $rubroConvocatoria
 */
class Rubro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rubro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rubro_convocatoria', 'numerical', 'integerOnly'=>true),
			array('porcentaje', 'numerical'),
			array('rubro, variable_de_control', 'length', 'max'=>100),
			array('operacion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo, rubro, operacion, porcentaje, variable_de_control, rubro_convocatoria', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'rubroConvocatoria' => array(self::BELONGS_TO, 'Convocatoria', 'rubro_convocatoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo' => 'Codigo',
			'rubro' => 'Rubro',
			'operacion' => 'Operacion',
			'porcentaje' => 'Porcentaje',
			'variable_de_control' => 'Variable De Control',
			'rubro_convocatoria' => 'Rubro Convocatoria',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('codigo',$this->codigo);
		$criteria->compare('rubro',$this->rubro,true);
		$criteria->compare('operacion',$this->operacion,true);
		$criteria->compare('porcentaje',$this->porcentaje);
		$criteria->compare('variable_de_control',$this->variable_de_control,true);
		$criteria->compare('rubro_convocatoria',$this->rubro_convocatoria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rubro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
