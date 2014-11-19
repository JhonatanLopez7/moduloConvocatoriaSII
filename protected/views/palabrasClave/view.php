<?php
/* @var $this PalabrasClaveController */
/* @var $model PalabrasClave */

$this->breadcrumbs=array(
	'Palabras Claves'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'Listar Palabras Clave', 'url'=>array('index')),
	array('label'=>'Crear Palabras Clave', 'url'=>array('create')),
	array('label'=>'Modificar Palabras Clave', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Eliminar Palabras Clave', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Palabras Clave', 'url'=>array('admin')),
);
?>

<h1>Ver PalabrasClave #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'estado',
		'cantidad',
		//'convocatoria_fk',
	),
)); ?>
