<?php
/* @var $this RubroController */
/* @var $model Rubro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rubro'); ?>
		<?php echo $form->textField($model,'rubro',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'operacion'); ?>
		<?php echo $form->textField($model,'operacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentaje'); ?>
		<?php echo $form->textField($model,'porcentaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'variable_de_control'); ?>
		<?php echo $form->textField($model,'variable_de_control',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rubro_convocatoria'); ?>
		<?php echo $form->textField($model,'rubro_convocatoria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->