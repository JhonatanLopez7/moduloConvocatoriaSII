<?php
/* @var $this RubroController */
/* @var $model Rubro */

$this->breadcrumbs=array(
	'Rubros'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Eliminar',
);

$this->menu=array(
	array('label'=>'Listar Rubros', 'url'=>array('index')),
	array('label'=>'Crear Rubro', 'url'=>array('create')),
	array('label'=>'Ver Rubro', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Administrar Rubro', 'url'=>array('admin')),
);
?>

<h1>Eliminar Rubro <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>