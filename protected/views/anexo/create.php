<?php
/* @var $this AnexoController */
/* @var $model Anexo */

$this->breadcrumbs=array(
	'Anexos'=>array('index'),
	'Crear Anexo',
);

$this->menu=array(
	array('label'=>'Listar Anexos', 'url'=>array('index')),
	array('label'=>'Administrar Anexos', 'url'=>array('admin')),
);
?>

<h1>Crear Anexos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>