<?php
/* @var $this RubroController */
/* @var $model Rubro */

$this->breadcrumbs=array(
	'Rubros'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Rubros', 'url'=>array('index')),
	array('label'=>'Administrar Rubros', 'url'=>array('admin')),
);
?>

<h1>Crear Rubro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>