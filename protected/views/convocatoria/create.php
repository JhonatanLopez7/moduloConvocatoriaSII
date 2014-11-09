<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	'Crear',
);

$this->menu=array(
	/*array('label'=>'Listar Convocatoria', 'url'=>array('index')),*/
	array('label'=>'Administrar Convocatorias', 'url'=>array('admin')),
);
?>

<h1>Crear Convocatorias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>