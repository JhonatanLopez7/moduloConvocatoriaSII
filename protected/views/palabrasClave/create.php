<?php
/* @var $this PalabrasClaveController */
/* @var $model PalabrasClave */

$this->breadcrumbs=array(
	'Palabras Claves'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Palabras Clave', 'url'=>array('index')),
	array('label'=>'Administrar Palabras Clave', 'url'=>array('admin')),
);
?>

<h1>Crear Palabras Clave</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>