<?php
/* @var $this PalabrasClaveController */
/* @var $model PalabrasClave */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'palabras-clave-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	
	<div class="row">
		<div class="col-lg-12">
			<p>En este espacio diligencie los campos requeridos. Los datos marcados con <span class="required">*</span> son obligatorios, cuando termine de click en aceptar.</p>
		</div>
	</div>	
	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'convocatoria_fk'); ?>
			<?php $datos2 = CHtml::listData(Convocatoria::model()->findAll(),'codigo_convocatoria','convocatoria');
			 echo $form->DropDownList($model, 'convocatoria_fk', $datos2, array('empty'=>'Seleccione','style'=>'border-radius: 7px; width: 175px')); ?>
			<?php echo $form->error($model,'convocatoria_fk'); ?>
		</div>		
	</div>

	<div class="row">
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'estado'); ?>
			<?php echo $form->DropDownList($model,'estado',array('empty'=>'Seleccione','true'=>'Habilitado','false'=>'Deshabilitado'),array('style'=>'border-radius: 7px; width: 175px')); ?>
			<?php echo $form->error($model,'estado'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'cantidad'); ?>
			<?php echo $form->textField($model,'cantidad',array('style'=>'border-radius: 7px; width: 175px')); ?>
			<?php echo $form->error($model,'cantidad'); ?>
		</div>	
	</div>

	<div class="row buttons">
		<div class="col-lg-4">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->