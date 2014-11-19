<?php
/* @var $this RubroController */
/* @var $model Rubro */

$this->breadcrumbs=array(
	'Rubros'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'Listar Rubros', 'url'=>array('index')),
	array('label'=>'Crear Rubro', 'url'=>array('create')),
	array('label'=>'Modificar Rubro', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Eliminar Rubro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Rubros', 'url'=>array('admin')),
);
?>

<h1>Ver Rubro #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'rubro',
		'operacion',
		'porcentaje',
		'variable_de_control',
		'rubro_convocatoria',
	),
)); ?>
