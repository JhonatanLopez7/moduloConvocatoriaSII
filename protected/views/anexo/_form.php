<?php
/* @var $this AnexoController */
/* @var $model Anexo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anexo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<h3>Anexos</h3>
	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruta'); ?>
		<?php echo $form->textField($model,'ruta',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ruta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo'); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'convocatoria_fk'); ?>
		<?php echo $form->textField($model,'convocatoria_fk'); ?>
		<?php echo $form->error($model,'convocatoria_fk'); ?>
	</div>-

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->