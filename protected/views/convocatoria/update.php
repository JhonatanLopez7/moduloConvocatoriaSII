<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	$model->codigo_convocatoria=>array('view','id'=>$model->codigo_convocatoria),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Convocatorias', 'url'=>array('index')),
	array('label'=>'Crear nueva Convocatoria y/o Servicio', 'url'=>array('create')),
	array('label'=>'Ver Convocatoria', 'url'=>array('view', 'id'=>$model->codigo_convocatoria)),
	array('label'=>'Administrar Convocatorias', 'url'=>array('admin')),
);
?>

<h1>Editar Convocatoria <?php echo $model->codigo_convocatoria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>