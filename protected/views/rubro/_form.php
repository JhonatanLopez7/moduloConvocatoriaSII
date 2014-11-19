<?php
/* @var $this RubroController */
/* @var $model Rubro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rubro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con<span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rubro'); ?>
		<?php echo $form->textField($model,'rubro',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'rubro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operacion'); ?>
		<?php echo $form->textField($model,'operacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'operacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentaje'); ?>
		<?php echo $form->textField($model,'porcentaje'); ?>
		<?php echo $form->error($model,'porcentaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'variable_de_control'); ?>
		<?php echo $form->textField($model,'variable_de_control',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'variable_de_control'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rubro_convocatoria'); ?>
		<?php echo $form->textField($model,'rubro_convocatoria'); ?>
		<?php echo $form->error($model,'rubro_convocatoria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->