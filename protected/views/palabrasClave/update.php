<?php
/* @var $this PalabrasClaveController */
/* @var $model PalabrasClave */

$this->breadcrumbs=array(
	'Palabras Claves'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Palabras Clave', 'url'=>array('index')),
	array('label'=>'Crear Palabras Clave', 'url'=>array('create')),
	array('label'=>'Ver Palabras Clave', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Administrar Palabras Clave', 'url'=>array('admin')),
);
?>

<h1>Modificar Palabras Clave <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>