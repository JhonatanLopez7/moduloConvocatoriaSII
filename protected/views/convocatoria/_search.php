<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tipo_convocatoria'); ?>
		<?php echo $form->textField($model,'tipo_convocatoria',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subtipo_convocatoria'); ?>
		<?php echo $form->textField($model,'subtipo_convocatoria',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'convocatoria_programa'); ?>
		<?php echo $form->textField($model,'convocatoria_programa',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_financiacion'); ?>
		<?php echo $form->textField($model,'tipo_financiacion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_apertura'); ?>
		<?php echo $form->textField($model,'fecha_apertura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_cierre'); ?>
		<?php echo $form->textField($model,'fecha_cierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_resultado_preliminar'); ?>
		<?php echo $form->textField($model,'fecha_resultado_preliminar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_resultado_definitivo'); ?>
		<?php echo $form->textField($model,'fecha_resultado_definitivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'convocatoria'); ?>
		<?php echo $form->textField($model,'convocatoria',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_convocatoria'); ?>
		<?php echo $form->textField($model,'codigo_convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'objeto'); ?>
		<?php echo $form->textField($model,'objeto',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirigido_a'); ?>
		<?php echo $form->textField($model,'dirigido_a',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'programa_base'); ?>
		<?php echo $form->textField($model,'programa_base',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'instituciones_financiadoras'); ?>
		<?php echo $form->textField($model,'instituciones_financiadoras',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maximo_porcentaje_financiar'); ?>
		<?php echo $form->textField($model,'maximo_porcentaje_financiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimo_porcentaje_financiar'); ?>
		<?php echo $form->textField($model,'minimo_porcentaje_financiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimo_porcentaje_contrapartida_dinero'); ?>
		<?php echo $form->textField($model,'minimo_porcentaje_contrapartida_dinero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimo_porcentaje_contrapartida_especie'); ?>
		<?php echo $form->textField($model,'minimo_porcentaje_contrapartida_especie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto_maximo_financiar'); ?>
		<?php echo $form->textField($model,'monto_maximo_financiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_maximo_meses_proyecto'); ?>
		<?php echo $form->textField($model,'numero_maximo_meses_proyecto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto_total_convocatoria'); ?>
		<?php echo $form->textField($model,'monto_total_convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'convenio'); ?>
		<?php echo $form->textField($model,'convenio',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cdp'); ?>
		<?php echo $form->textField($model,'cdp',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_cdp'); ?>
		<?php echo $form->textField($model,'fecha_cdp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cdr'); ?>
		<?php echo $form->textField($model,'cdr',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_cdr'); ?>
		<?php echo $form->textField($model,'fecha_cdr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'linea_investigacion'); ?>
		<?php echo $form->textField($model,'linea_investigacion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'postulacion_anticipada'); ?>
		<?php echo $form->textField($model,'postulacion_anticipada',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'definir_estructura_convocatoria'); ?>
		<?php echo $form->textField($model,'definir_estructura_convocatoria',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_proyecto_inversion'); ?>
		<?php echo $form->textField($model,'numero_proyecto_inversion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vigencia'); ?>
		<?php echo $form->textField($model,'vigencia',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->