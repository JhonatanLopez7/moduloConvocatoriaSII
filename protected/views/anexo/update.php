<?php
/* @var $this AnexoController */
/* @var $model Anexo */

$this->breadcrumbs=array(
	'Anexos'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Anexo', 'url'=>array('index')),
	array('label'=>'Create Anexo', 'url'=>array('create')),
	array('label'=>'View Anexo', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage Anexo', 'url'=>array('admin')),
);
?>

<h1>Update Anexo <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>