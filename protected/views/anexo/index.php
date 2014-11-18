<?php
/* @var $this AnexoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Anexos',
);

$this->menu=array(
	array('label'=>'Crear Anexo', 'url'=>array('create')),
	array('label'=>'Administrar Anexos', 'url'=>array('admin')),
);
?>

<h1>Anexos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
