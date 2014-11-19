<?php
/* @var $this RubroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rubros',
);

$this->menu=array(
	array('label'=>'Crear Rubro', 'url'=>array('create')),
	array('label'=>'Administrar Rubro', 'url'=>array('admin')),
);
?>

<h1>Rubros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
