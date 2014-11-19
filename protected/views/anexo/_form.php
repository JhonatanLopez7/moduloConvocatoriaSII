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

    <!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<?php echo $form->errorSummary($model); ?>
	<br>

	<div class="row">
		<div class="col-lg-8">
			<?php echo $form->labelEx($model,'convoctoria'); ?>
			<?php $datos = CHtml::listData(Convocatoria::model()->findAll(),'codigo_convocatoria','convocatoria');
			echo $form->DropDownList($model,'convoctoria', $datos , array('empty'=>'Seleccione','style'=>'border-radius: 7px; width: 175px')); ?>
			<?php echo $form->error($model,'convoctoria'); ?>
		</div>	
	</div>

	<div class="row">
		<div class="col-lg-5">
			<?php echo $form->labelEx($model,'Nombre del anexo'); ?>
			<?php echo $form->textField($model,'nombre',array('style'=>'border-radius: 7px; width: 175px;','size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombre'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-5">
			<?php echo $form->labelEx($model,'Anexo'); ?>
			<?php echo CHtml::activeFileField($model,'ruta',array('style'=>'border-radius: 7px;','size'=>60,'maxlength'=>200)); ?>
			<?php echo $form->error($model,'ruta'); ?>
		</div>
	</div>

	<div class="row buttons">
		<div class="col-lg-5">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
		</div>	
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->