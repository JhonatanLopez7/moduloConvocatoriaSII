<?php

/**
 * This is the model class for table "convocatoria".
 *
 * The followings are the available columns in table 'convocatoria':
 * @property string $tipo_convocatoria
 * @property string $subtipo_convocatoria
 * @property string $convocatoria_programa
 * @property string $tipo_financiacion
 * @property string $fecha_apertura
 * @property string $fecha_cierre
 * @property string $fecha_resultado_preliminar
 * @property string $fecha_resultado_definitivo
 * @property string $convocatoria
 * @property integer $codigo_convocatoria
 * @property string $descripcion
 * @property string $objeto
 * @property string $dirigido_a
 * @property string $programa_base
 * @property string $instituciones_financiadoras
 * @property double $maximo_porcentaje_financiar
 * @property double $minimo_porcentaje_financiar
 * @property double $minimo_porcentaje_contrapartida_dinero
 * @property double $minimo_porcentaje_contrapartida_especie
 * @property double $monto_maximo_financiar
 * @property integer $numero_maximo_meses_proyecto
 * @property double $monto_total_convocatoria
 * @property string $convenio
 * @property string $cdp
 * @property string $fecha_cdp
 * @property string $cdr
 * @property string $fecha_cdr
 * @property string $url
 * @property string $linea_investigacion
 * @property string $postulacion_anticipada
 * @property string $definir_estructura_convocatoria
 * @property integer $numero_proyecto_inversion
 * @property string $vigencia
 */
class Convocatoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'convocatoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_financiacion, fecha_apertura, fecha_cierre, convocatoria, codigo_convocatoria', 'required'),
			array('codigo_convocatoria, numero_maximo_meses_proyecto, numero_proyecto_inversion', 'numerical', 'integerOnly'=>true),
			array('maximo_porcentaje_financiar, minimo_porcentaje_financiar, minimo_porcentaje_contrapartida_dinero, minimo_porcentaje_contrapartida_especie, monto_maximo_financiar, monto_total_convocatoria', 'numerical'),
			array('tipo_convocatoria, subtipo_convocatoria, convocatoria_programa, tipo_financiacion, convocatoria, dirigido_a, programa_base, instituciones_financiadoras, convenio, cdp, cdr, url, linea_investigacion, postulacion_anticipada, definir_estructura_convocatoria, vigencia', 'length', 'max'=>100),
			array('descripcion', 'length', 'max'=>250),
			array('objeto', 'length', 'max'=>150),
			array('fecha_resultado_preliminar, fecha_resultado_definitivo, fecha_cdp, fecha_cdr', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tipo_convocatoria, subtipo_convocatoria, convocatoria_programa, tipo_financiacion, fecha_apertura, fecha_cierre, fecha_resultado_preliminar, fecha_resultado_definitivo, convocatoria, codigo_convocatoria, descripcion, objeto, dirigido_a, programa_base, instituciones_financiadoras, maximo_porcentaje_financiar, minimo_porcentaje_financiar, minimo_porcentaje_contrapartida_dinero, minimo_porcentaje_contrapartida_especie, monto_maximo_financiar, numero_maximo_meses_proyecto, monto_total_convocatoria, convenio, cdp, fecha_cdp, cdr, fecha_cdr, url, linea_investigacion, postulacion_anticipada, definir_estructura_convocatoria, numero_proyecto_inversion, vigencia', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipo_convocatoria' => 'Tipo Convocatoria',
			'subtipo_convocatoria' => 'Subtipo Convocatoria',
			'convocatoria_programa' => 'Convocatoria Programa',
			'tipo_financiacion' => 'Tipo Financiacion',
			'fecha_apertura' => 'Fecha Apertura',
			'fecha_cierre' => 'Fecha Cierre',
			'fecha_resultado_preliminar' => 'Fecha Resultado Preliminar',
			'fecha_resultado_definitivo' => 'Fecha Resultado Definitivo',
			'convocatoria' => 'Convocatoria',
			'codigo_convocatoria' => 'Codigo Convocatoria',
			'descripcion' => 'Descripcion',
			'objeto' => 'Objeto',
			'dirigido_a' => 'Dirigido A',
			'programa_base' => 'Programa Base',
			'instituciones_financiadoras' => 'Instituciones Financiadoras',
			'maximo_porcentaje_financiar' => 'Maximo Porcentaje Financiar',
			'minimo_porcentaje_financiar' => 'Minimo Porcentaje Financiar',
			'minimo_porcentaje_contrapartida_dinero' => 'Minimo Porcentaje Contrapartida Dinero',
			'minimo_porcentaje_contrapartida_especie' => 'Minimo Porcentaje Contrapartida Especie',
			'monto_maximo_financiar' => 'Monto Maximo Financiar',
			'numero_maximo_meses_proyecto' => 'Numero Maximo Meses Proyecto',
			'monto_total_convocatoria' => 'Monto Total Convocatoria',
			'convenio' => 'Convenio',
			'cdp' => 'Cdp',
			'fecha_cdp' => 'Fecha Cdp',
			'cdr' => 'Cdr',
			'fecha_cdr' => 'Fecha Cdr',
			'url' => 'Url',
			'linea_investigacion' => 'Linea Investigacion',
			'postulacion_anticipada' => 'Postulacion Anticipada',
			'definir_estructura_convocatoria' => 'Definir Estructura Convocatoria',
			'numero_proyecto_inversion' => 'Numero Proyecto Inversion',
			'vigencia' => 'Vigencia',
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

		$criteria->compare('tipo_convocatoria',$this->tipo_convocatoria,true);
		$criteria->compare('subtipo_convocatoria',$this->subtipo_convocatoria,true);
		$criteria->compare('convocatoria_programa',$this->convocatoria_programa,true);
		$criteria->compare('tipo_financiacion',$this->tipo_financiacion,true);
		$criteria->compare('fecha_apertura',$this->fecha_apertura,true);
		$criteria->compare('fecha_cierre',$this->fecha_cierre,true);
		$criteria->compare('fecha_resultado_preliminar',$this->fecha_resultado_preliminar,true);
		$criteria->compare('fecha_resultado_definitivo',$this->fecha_resultado_definitivo,true);
		$criteria->compare('convocatoria',$this->convocatoria,true);
		$criteria->compare('codigo_convocatoria',$this->codigo_convocatoria);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('objeto',$this->objeto,true);
		$criteria->compare('dirigido_a',$this->dirigido_a,true);
		$criteria->compare('programa_base',$this->programa_base,true);
		$criteria->compare('instituciones_financiadoras',$this->instituciones_financiadoras,true);
		$criteria->compare('maximo_porcentaje_financiar',$this->maximo_porcentaje_financiar);
		$criteria->compare('minimo_porcentaje_financiar',$this->minimo_porcentaje_financiar);
		$criteria->compare('minimo_porcentaje_contrapartida_dinero',$this->minimo_porcentaje_contrapartida_dinero);
		$criteria->compare('minimo_porcentaje_contrapartida_especie',$this->minimo_porcentaje_contrapartida_especie);
		$criteria->compare('monto_maximo_financiar',$this->monto_maximo_financiar);
		$criteria->compare('numero_maximo_meses_proyecto',$this->numero_maximo_meses_proyecto);
		$criteria->compare('monto_total_convocatoria',$this->monto_total_convocatoria);
		$criteria->compare('convenio',$this->convenio,true);
		$criteria->compare('cdp',$this->cdp,true);
		$criteria->compare('fecha_cdp',$this->fecha_cdp,true);
		$criteria->compare('cdr',$this->cdr,true);
		$criteria->compare('fecha_cdr',$this->fecha_cdr,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('linea_investigacion',$this->linea_investigacion,true);
		$criteria->compare('postulacion_anticipada',$this->postulacion_anticipada,true);
		$criteria->compare('definir_estructura_convocatoria',$this->definir_estructura_convocatoria,true);
		$criteria->compare('numero_proyecto_inversion',$this->numero_proyecto_inversion);
		$criteria->compare('vigencia',$this->vigencia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Convocatoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
