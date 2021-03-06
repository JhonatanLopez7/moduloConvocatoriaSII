<?php
/* @var $this PalabrasClaveController */
/* @var $model PalabrasClave */

$this->breadcrumbs=array(
	'Palabras Claves'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Palabras Clave', 'url'=>array('index')),
	array('label'=>'Crear Palabras Clave', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#palabras-clave-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Palabras Claves</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'palabras-clave-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'codigo',
		'estado',
		'cantidad',
		'convocatoria_fk',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
