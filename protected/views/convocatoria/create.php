<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Convocatorias', 'url'=>array('index')),
	array('label'=>'Administrar Convocatorias', 'url'=>array('admin')),
);
?>
<div class="TituloCrear">
	<div class="Texto">
		<h1 class="Titulo">Crear Convocatoria</h1>
	</div>
	
</div>


<style>
	.TituloCrear{
		/*background: #69A8CD; color original*/
		background: #669999;	
	}
	.Texto{
		margin-left: 230px;
	}
	.Titulo{
		color: #FFFFFF;
	}
</style>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>