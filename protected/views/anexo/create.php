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

<div class="TituloCrear">
	<div class="Texto">
		<h2 class="Titulo">Crear Anexos</h2>
	</div>
	
</div>


<style>
	.TituloCrear{
		/*background: #69A8CD; color original*/
		background: #669999;	
	}
	.Texto{
		margin-left: 250px;
	}
	.Titulo{
		color: #FFFFFF;
	}
</style>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>