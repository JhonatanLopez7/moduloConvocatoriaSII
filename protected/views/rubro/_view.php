<?php
/* @var $this RubroController */
/* @var $data Rubro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo), array('view', 'id'=>$data->codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rubro')); ?>:</b>
	<?php echo CHtml::encode($data->rubro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('operacion')); ?>:</b>
	<?php echo CHtml::encode($data->operacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentaje')); ?>:</b>
	<?php echo CHtml::encode($data->porcentaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('variable_de_control')); ?>:</b>
	<?php echo CHtml::encode($data->variable_de_control); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rubro_convocatoria')); ?>:</b>
	<?php echo CHtml::encode($data->rubro_convocatoria); ?>
	<br />


</div>