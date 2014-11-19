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
	
	<br>
	<div class="row">
		<div class ="col-lg-12">
			<p>Los campos con<span class="required">*</span> son obligatorios.</p>
		</div>
	</div>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="col-lg-5">
			<?php echo $form->labelEx($model,'convoctoria'); ?>
			<?php $datos = CHtml::listData(Convocatoria::model()->findAll(),'codigo_convocatoria','convocatoria');
			echo $form->DropDownList($model,'rubro_convocatoria', $datos , array('empty'=>'Seleccione','style'=>'border-radius: 7px; width: 175px')); ?>
			<?php echo $form->error($model,'convoctoria'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-5">
			<?php echo $form->labelEx($model,'rubro'); ?>
			<?php echo $form->textField($model,'rubro',array('size'=>60,'maxlength'=>100,'empty'=>'Seleccione','style'=>'border-radius: 7px; width: 175px')); ?>
			<?php echo $form->error($model,'rubro'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-5">
			<?php echo $form->labelEx($model,'operacion'); ?>
			<?php echo $form->DropDownList($model,'operacion',array('empty'=>'Seleccione','Menor igual'=>'Menor igual','Igual'=>'Igual'),array('style'=>'border-radius: 7px; width: 175px')); ?>
			<?php echo $form->error($model,'operacion'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-5">
			<?php echo $form->labelEx($model,'porcentaje'); ?>
			<?php echo $form->textField($model,'porcentaje',array('style'=>'border-radius: 7px; width: 175px')); ?>
			<?php echo $form->error($model,'porcentaje'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-5">
			<?php echo $form->labelEx($model,'variable_de_control'); ?>
			<?php echo $form->DropDownList($model,'variable_de_control',array('empty'=>'Seleccione','Total del rubro'=>'Total del rubro','Total del proyecto'=>'Total del proyecto','Total Financiado'=>'Total Financiado'),array('style'=>'border-radius: 7px; width: 175px')); ?>
			<?php echo $form->error($model,'variable_de_control'); ?>
		</div>
	</div>

	<div class="row buttons">
		<div class="col-lg-5">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		</div>	
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->