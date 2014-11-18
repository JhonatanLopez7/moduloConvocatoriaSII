<?php
/* @var $this AnexoController */
/* @var $model Anexo */

$this->breadcrumbs=array(
	'Anexos'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List Anexo', 'url'=>array('index')),
	array('label'=>'Create Anexo', 'url'=>array('create')),
	array('label'=>'Update Anexo', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete Anexo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Anexo', 'url'=>array('admin')),
);
?>

<h1>View Anexo #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
		'ruta',
		'codigo',
		'convoctoria',
		'fecha',
	),
)); ?>
