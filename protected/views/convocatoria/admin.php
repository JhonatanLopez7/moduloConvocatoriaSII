<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Convocatoria', 'url'=>array('index')),
	array('label'=>'Create Convocatoria', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#convocatoria-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Convocatorias</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'convocatoria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array
		'convocatoria',
		'tipo_convocatoria',
		'subtipo_convocatoria',
		'fecha_apertura',
		'fecha_cierre',
		/*
		'tipo_financiacion',
		'fecha_resultado_preliminar',
		'fecha_resultado_definitivo',
		'convocatoria_programa',
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
