<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'convocatoria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--<div class="row">	
		<?php echo $form->labelEx($model,'tipo_convocatoria'); ?>
		<?php echo $form->textField($model,'tipo_convocatoria',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tipo_convocatoria'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_convocatoria'); ?>
		<?php echo $form->DropDownList($model,'tipo_convocatoria',array('empty'=>'Seleccione', 1=>'Proyectos', 2=>'Servicios', 3=>'Formacion', 4=>'Apropiacion Social', 5=>'Regalias')); ?>
		<?php echo $form->error($model,'tipo_convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtipo_convocatoria'); ?>
		<?php echo $form->textField($model,'subtipo_convocatoria',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'subtipo_convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'convocatoria_programa'); ?>
		<?php echo $form->textField($model,'convocatoria_programa',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'convocatoria_programa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_financiacion'); ?>
		<?php echo $form->textField($model,'tipo_financiacion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tipo_financiacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_apertura'); ?>
		<?php echo $form->textField($model,'fecha_apertura'); ?>
		<?php echo $form->error($model,'fecha_apertura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_cierre'); ?>
		<?php echo $form->textField($model,'fecha_cierre'); ?>
		<?php echo $form->error($model,'fecha_cierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_resultado_preliminar'); ?>
		<?php echo $form->textField($model,'fecha_resultado_preliminar'); ?>
		<?php echo $form->error($model,'fecha_resultado_preliminar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_resultado_definitivo'); ?>
		<?php echo $form->textField($model,'fecha_resultado_definitivo'); ?>
		<?php echo $form->error($model,'fecha_resultado_definitivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'convocatoria'); ?>
		<?php echo $form->textField($model,'convocatoria',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_convocatoria'); ?>
		<?php echo $form->textField($model,'codigo_convocatoria'); ?>
		<?php echo $form->error($model,'codigo_convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'objeto'); ?>
		<?php echo $form->textField($model,'objeto',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'objeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirigido_a'); ?>
		<?php echo $form->textField($model,'dirigido_a',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dirigido_a'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'programa_base'); ?>
		<?php echo $form->textField($model,'programa_base',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'programa_base'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'instituciones_financiadoras'); ?>
		<?php echo $form->textField($model,'instituciones_financiadoras',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'instituciones_financiadoras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maximo_porcentaje_financiar'); ?>
		<?php echo $form->textField($model,'maximo_porcentaje_financiar'); ?>
		<?php echo $form->error($model,'maximo_porcentaje_financiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minimo_porcentaje_financiar'); ?>
		<?php echo $form->textField($model,'minimo_porcentaje_financiar'); ?>
		<?php echo $form->error($model,'minimo_porcentaje_financiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minimo_porcentaje_contrapartida_dinero'); ?>
		<?php echo $form->textField($model,'minimo_porcentaje_contrapartida_dinero'); ?>
		<?php echo $form->error($model,'minimo_porcentaje_contrapartida_dinero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minimo_porcentaje_contrapartida_especie'); ?>
		<?php echo $form->textField($model,'minimo_porcentaje_contrapartida_especie'); ?>
		<?php echo $form->error($model,'minimo_porcentaje_contrapartida_especie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto_maximo_financiar'); ?>
		<?php echo $form->textField($model,'monto_maximo_financiar'); ?>
		<?php echo $form->error($model,'monto_maximo_financiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_maximo_meses_proyecto'); ?>
		<?php echo $form->textField($model,'numero_maximo_meses_proyecto'); ?>
		<?php echo $form->error($model,'numero_maximo_meses_proyecto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto_total_convocatoria'); ?>
		<?php echo $form->textField($model,'monto_total_convocatoria'); ?>
		<?php echo $form->error($model,'monto_total_convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'convenio'); ?>
		<?php echo $form->textField($model,'convenio',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'convenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cdp'); ?>
		<?php echo $form->textField($model,'cdp',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cdp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_cdp'); ?>
		<?php echo $form->textField($model,'fecha_cdp'); ?>
		<?php echo $form->error($model,'fecha_cdp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cdr'); ?>
		<?php echo $form->textField($model,'cdr',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cdr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_cdr'); ?>
		<?php echo $form->textField($model,'fecha_cdr'); ?>
		<?php echo $form->error($model,'fecha_cdr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linea_investigacion'); ?>
		<?php echo $form->textField($model,'linea_investigacion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'linea_investigacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postulacion_anticipada'); ?>
		<?php echo $form->textField($model,'postulacion_anticipada',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'postulacion_anticipada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'definir_estructura_convocatoria'); ?>
		<?php echo $form->textField($model,'definir_estructura_convocatoria',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'definir_estructura_convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_proyecto_inversion'); ?>
		<?php echo $form->textField($model,'numero_proyecto_inversion'); ?>
		<?php echo $form->error($model,'numero_proyecto_inversion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vigencia'); ?>
		<?php echo $form->textField($model,'vigencia',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'vigencia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->