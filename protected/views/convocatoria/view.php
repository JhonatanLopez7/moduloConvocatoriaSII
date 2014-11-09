<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	$model->codigo_convocatoria,
);

$this->menu=array(
	array('label'=>'List Convocatoria', 'url'=>array('index')),
	array('label'=>'Create Convocatoria', 'url'=>array('create')),
	array('label'=>'Update Convocatoria', 'url'=>array('update', 'id'=>$model->codigo_convocatoria)),
	array('label'=>'Delete Convocatoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_convocatoria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Convocatoria', 'url'=>array('admin')),
);
?>

<h1>View Convocatoria #<?php echo $model->codigo_convocatoria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_convocatoria',
		'subtipo_convocatoria',
		'convocatoria_programa',
		'tipo_financiacion',
		'fecha_apertura',
		'fecha_cierre',
		'fecha_resultado_preliminar',
		'fecha_resultado_definitivo',
		'convocatoria',
		'codigo_convocatoria',
		'descripcion',
		'objeto',
		'dirigido_a',
		'programa_base',
		'instituciones_financiadoras',
		'maximo_porcentaje_financiar',
		'minimo_porcentaje_financiar',
		'minimo_porcentaje_contrapartida_dinero',
		'minimo_porcentaje_contrapartida_especie',
		'monto_maximo_financiar',
		'numero_maximo_meses_proyecto',
		'monto_total_convocatoria',
		'convenio',
		'cdp',
		'fecha_cdp',
		'cdr',
		'fecha_cdr',
		'url',
		'linea_investigacion',
		'postulacion_anticipada',
		'definir_estructura_convocatoria',
		'numero_proyecto_inversion',
		'vigencia',
	),
)); ?>
