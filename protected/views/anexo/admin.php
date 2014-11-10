<?php
/* @var $this AnexoController */
/* @var $model Anexo */

$this->breadcrumbs=array(
	'Anexos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Crear Anexo', 'url'=>array('create')),
	array('label'=>'Listar Anexos', 'url'=>array('index')),
	);
?>
<div class="Titulo">
		<h2 class="Texto">Anexos</h2>
</div>
<div>
	<h2 class="TextoDefinirAnexos">DEFINIR ANEXOS</h2>
</div>

<style>
	.Titulo{
		/*background: #69A8CD; color original*/
		background: #669999;	
	}
		.Texto{
		color: #FFFFFF;
	}
	.TextoDefinirAnexos{
		color: #669999;
		margin-left: 256px;
	}
</style>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'anexo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombre',
		'ruta',
		'codigo',
		'convocatoria_fk',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
