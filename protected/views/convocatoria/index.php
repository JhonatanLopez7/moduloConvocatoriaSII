<?php
/* @var $this ConvocatoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Convocatorias',
);

$this->menu=array(
	array('label'=>'Crear nueva Convocatoria y/o Servicio', 'url'=>array('create')),
	array('label'=>'Administrar Convocatorias', 'url'=>array('admin')),
);
?>

<h1>Convocatorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
