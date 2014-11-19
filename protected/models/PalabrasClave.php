<?php

/**
 * This is the model class for table "palabras_clave".
 *
 * The followings are the available columns in table 'palabras_clave':
 * @property integer $codigo
 * @property string $estado
 * @property integer $cantidad
 * @property integer $convocatoria_fk
 *
 * The followings are the available model relations:
 * @property Convocatoria $convocatoriaFk
 */
class PalabrasClave extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'palabras_clave';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cantidad, convocatoria_fk', 'numerical', 'integerOnly'=>true),
			array('estado', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo, estado, cantidad, convocatoria_fk', 'safe', 'on'=>'search'),
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
			'convocatoriaFk' => array(self::BELONGS_TO, 'Convocatoria', 'convocatoria_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo' => 'Codigo',
			'estado' => 'Estado',
			'cantidad' => 'Cantidad',
			'convocatoria_fk' => 'Convocatoria Fk',
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
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('convocatoria_fk',$this->convocatoria_fk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PalabrasClave the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
