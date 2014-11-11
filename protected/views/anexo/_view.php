<?php
/* @var $this AnexoController */
/* @var $data Anexo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo), array('view', 'id'=>$data->codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruta')); ?>:</b>
	<?php echo CHtml::encode($data->ruta); ?>
	<br />
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('convocatoria_fk')); ?>:</b>
	<?php echo CHtml::encode($data->convocatoria_fk); ?>
	<br />-->


</div>