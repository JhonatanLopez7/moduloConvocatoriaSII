<?php
/* @var $this AnexoController */
/* @var $model Anexo */

$this->breadcrumbs=array(
	'Anexos'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Anexos', 'url'=>array('index')),
	array('label'=>'Crear Anexo', 'url'=>array('create')),
	array('label'=>'Ver Anexo', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Administrar Anexos', 'url'=>array('admin')),
);
?>

<h1>Modificar Anexo <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>