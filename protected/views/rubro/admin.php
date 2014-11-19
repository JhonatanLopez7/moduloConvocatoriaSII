<?php
/* @var $this RubroController */
/* @var $model Rubro */

$this->breadcrumbs=array(
	'Rubros'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Rubros', 'url'=>array('index')),
	array('label'=>'Crear Rubro', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rubro-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Rubros</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rubro-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'codigo',
		'rubro',
		'operacion',
		'porcentaje',
		'variable_de_control',
		//'rubro_convocatoria',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
