<?php
/* @var $this AnexoController */
/* @var $model Anexo */

$this->breadcrumbs=array(
	'Anexos'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'Listar Anexos', 'url'=>array('index')),
	array('label'=>'Crear Anexo', 'url'=>array('create')),
	array('label'=>'Modificar Anexo', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Eliminar Anexo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Anexo', 'url'=>array('admin')),
);
?>

<h1>Ver Anexo #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'nombre',
		'ruta',
		/*'convocatoria_fk',*/
	),
)); ?>
