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

	<p class="note">En este espacio diligencie los campos requeridos. Los datos marcados con <span class="required">*</span> son obligatorios, cuando termine de click en aceptar.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--<div class="row">	
		<?php echo $form->labelEx($model,'tipo_convocatoria'); ?>
		<?php echo $form->textField($model,'tipo_convocatoria',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tipo_convocatoria'); ?>
	</div>-->

	<div class="row">
		<div class="col-lg-3">
			<?php echo $form->labelEx($model,'tipo_convocatoria'); ?>
			<?php echo $form->DropDownList($model,'tipo_convocatoria',array('empty'=>'Seleccione', 'Proyectos'=>'Proyectos', 
			'Servicios'=>'Servicios', 'Formacion'=>'Formacion', 'Apropiacion Social'=>'Apropiacion Social', 'Regalias'=>'Regalias')); ?>
			<?php echo $form->error($model,'tipo_convocatoria'); ?>
		</div>
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'subtipo_convocatoria'); ?>
			<?php echo $form->DropDownList($model,'subtipo_convocatoria',array('empty'=>'Seleccione', 'Investigacion'=>'Investigacion', 
			'I+D'=>'I+D', 'Inovcacion'=>'Inovcacion', 'Emprendimiento'=>'Emprendimiento', 'Beneficios tributarios-Renta exenta por nuevo software'
			=>'Beneficios tributarios-Renta exenta por nuevo software','Beneficios tributarios-Deduccion por inversion o donacion'
			=>'Beneficios tributarios-Deduccion por inversion o donacion','Beneficios tributarios-Exencion de IVA por importacion de equipos'
			=>'Beneficios tributarios-Exencion de IVA por importacion de equipos','Reconocimiento y medicion de grupos'=>'Reconocimiento y medicion de grupos',
			'Reconocimiento de pares'=>'Reconocimiento de pares','Reconocimiento de centros'=>'Reconocimiento de centros','Reconocimiento de editoriales'=>'Reconocimiento de editoriales',
			'Indexacion y homologacion de revistas'=>'Indexacion y homologacion de revistas','Ondas'=>'Ondas', 'Jovenes Investigadores'=>'Jovenes Investigadores',
			'Jovenes Ingenieros'=>'Jovenes Ingenieros', 'Semillero Investigacion'=>'Semillero Investigacion', 'Maestria'=>'Maestria','Doctorado Nacional'=>'Doctorado Nacional', 
			'Doctorado internacional'=>'Doctorado internacional','Insercion laboral'=>'Insercion laboral','PostDoctorados'=>'PostDoctorados',
			'Pasantias'=>'Pasantias','Ideas para el cambio'=>'Ideas para el cambio', 'A ciencia cierta'=>'A ciencia cierta', 'Anexos'=>'Anexos',
			'Eventos'=>'Eventos','Semana Nacional C+T'=>'Semana Nacional C+T')); ?>
			<?php echo $form->error($model,'subtipo_convocatoria'); ?>
		</div>
	</div>	

	<div class="row">
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'convocatoria_programa'); ?>
			<?php echo $form->DropDownList($model,'convocatoria_programa',array('empty'=>'Seleccione', 'Si'=>'Si', 'No'=>'No')); ?>
			<?php echo $form->error($model,'convocatoria_programa'); ?>
		</div>
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'tipo_financiacion'); ?>
			<?php echo $form->DropDownList($model,'tipo_financiacion',array('empty'=>'Seleccione','Cofinancion'=>'Cofinancion',
			'Recuperacion contingente'=>'Recuperacion contingente','Credito condonable'=>'Credito condonable', 'Beca pasantia'=>'Beca pasantia')); ?>
			<?php echo $form->error($model,'tipo_financiacion'); ?>
		</div>
		<div class="col-lg-4">
				<?php echo $form->labelEx($model,'fecha_apertura'); ?>
				<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_apertura',
				'value'=>$model->fecha_apertura,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly",'style'=>'border-radius: 7px; border-color: rgb(211,211,211);'),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_apertura,
				'dateFormat'=>'yy-mm-dd',
				'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.png',
				'buttonImageOnly'=>true,
				'buttonText'=>'Fecha',
				'selectOtherMonths'=>true,
				'showAnim'=>'slide',
				'showButtonPanel'=>true,
				'showOn'=>'button', 
				'showOtherMonths'=>true, 
				'changeMonth' => 'true', 
				'changeYear' => 'true', 
				'minDate'=>'1900-01-01', 
				'maxDate'=> '0',
				),
				));?>
				<?php echo $form->error($model,'fecha_apertura'); ?>
		</div>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'fecha_apertura'); ?>
		<?php echo $form->textField($model,'fecha_apertura'); ?>
		<?php echo $form->error($model,'fecha_apertura'); ?>
	</div>-->

	<div class="row">
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'fecha_cierre'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_cierre',
				'value'=>$model->fecha_cierre,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly",'style'=>'border-radius: 7px; border-color: rgb(211,211,211);'),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_cierre,
				'dateFormat'=>'yy-mm-dd',
				'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.png',
				'buttonImageOnly'=>true,
				'buttonText'=>'Fecha',
				'selectOtherMonths'=>true,
				'showAnim'=>'slide',
				'showButtonPanel'=>true,
				'showOn'=>'button', 
				'showOtherMonths'=>true, 
				'changeMonth' => 'true', 
				'changeYear' => 'true', 
				'minDate'=>'1900-01-01', 
				'maxDate'=> '0',
				),
			));?>
			<?php echo $form->error($model,'fecha_cierre'); ?>
		</div>
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'fecha_resultado_preliminar'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_resultado_preliminar',
				'value'=>$model->fecha_resultado_preliminar,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly",'style'=>'border-radius: 7px; border-color: rgb(211,211,211);'),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_resultado_preliminar,
				'dateFormat'=>'yy-mm-dd',
				'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.png',
				'buttonImageOnly'=>true,
				'buttonText'=>'Fecha',
				'selectOtherMonths'=>true,
				'showAnim'=>'slide',
				'showButtonPanel'=>true,
				'showOn'=>'button', 
				'showOtherMonths'=>true, 
				'changeMonth' => 'true', 
				'changeYear' => 'true', 
				'minDate'=>'1900-01-01', 
				'maxDate'=> '0',
				),
			));?>
			<?php echo $form->error($model,'fecha_resultado_preliminar'); ?>
		</div>
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'fecha_resultado_definitivo'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_resultado_definitivo',
				'value'=>$model->fecha_resultado_definitivo,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly",'style'=>'border-radius: 7px; border-color: rgb(211,211,211);'),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_resultado_definitivo,
				'dateFormat'=>'yy-mm-dd',
				'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.png',
				'buttonImageOnly'=>true,
				'buttonText'=>'Fecha',
				'selectOtherMonths'=>true,
				'showAnim'=>'slide',
				'showButtonPanel'=>true,
				'showOn'=>'button', 
				'showOtherMonths'=>true, 
				'changeMonth' => 'true', 
				'changeYear' => 'true', 
				'minDate'=>'1900-01-01', 
				'maxDate'=> '0',
				),
			));?>
			<?php echo $form->error($model,'fecha_resultado_definitivo'); ?>
		</div>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'fecha_cierre'); ?>
		<?php echo $form->textField($model,'fecha_cierre'); ?>
		<?php echo $form->error($model,'fecha_cierre'); ?>
	</div>-->

	<!--<div class="row">
		<?php echo $form->labelEx($model,'fecha_resultado_preliminar'); ?>
		<?php echo $form->textField($model,'fecha_resultado_preliminar'); ?>
		<?php echo $form->error($model,'fecha_resultado_preliminar'); ?>
	</div>-->

	<!--<div class="row">
		<?php echo $form->labelEx($model,'fecha_resultado_definitivo'); ?>
		<?php echo $form->textField($model,'fecha_resultado_definitivo'); ?>
		<?php echo $form->error($model,'fecha_resultado_definitivo'); ?>
	</div>-->

	<div class="row">
		<div class="col-lg-8">
			<?php echo $form->labelEx($model,'convocatoria'); ?>
			<?php echo $form->textField($model,'convocatoria',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'convocatoria'); ?>
		</div>
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'codigo_convocatoria'); ?>
			<?php echo $form->textField($model,'codigo_convocatoria'); ?>
			<?php echo $form->error($model,'codigo_convocatoria'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<?php echo $form->labelEx($model,'descripcion'); ?>
			<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>250)); ?>
			<?php echo $form->error($model,'descripcion'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<?php echo $form->labelEx($model,'objeto'); ?>
			<?php echo $form->textField($model,'objeto',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'objeto'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<?php echo $form->labelEx($model,'dirigido_a'); ?>
			<?php echo $form->textField($model,'dirigido_a',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'dirigido_a'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<?php echo $form->labelEx($model,'programa_base'); ?>
			<?php echo $form->textField($model,'programa_base',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'programa_base'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<?php echo $form->labelEx($model,'instituciones_financiadoras'); ?>
			<?php echo $form->textField($model,'instituciones_financiadoras',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'instituciones_financiadoras'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php echo $form->labelEx($model,'maximo_porcentaje_financiar'); ?>
			<?php echo $form->textField($model,'maximo_porcentaje_financiar'); ?>
			<?php echo $form->error($model,'maximo_porcentaje_financiar'); ?>
		</div>	
		<div class="col-lg-6">
			<?php echo $form->labelEx($model,'minimo_porcentaje_financiar'); ?>
			<?php echo $form->textField($model,'minimo_porcentaje_financiar'); ?>
			<?php echo $form->error($model,'minimo_porcentaje_financiar'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php echo $form->labelEx($model,'minimo_porcentaje_contrapartida_dinero'); ?>
			<?php echo $form->textField($model,'minimo_porcentaje_contrapartida_dinero'); ?>
			<?php echo $form->error($model,'minimo_porcentaje_contrapartida_dinero'); ?>
		</div>	
		<div class="col-lg-6">
			<?php echo $form->labelEx($model,'minimo_porcentaje_contrapartida_especie'); ?>
			<?php echo $form->textField($model,'minimo_porcentaje_contrapartida_especie'); ?>
			<?php echo $form->error($model,'minimo_porcentaje_contrapartida_especie'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4">
		<?php echo $form->labelEx($model,'monto_maximo_financiar'); ?>
		<?php echo $form->textField($model,'monto_maximo_financiar'); ?>
		<?php echo $form->error($model,'monto_maximo_financiar'); ?>
		</div>
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'numero_maximo_meses_proyecto'); ?>
			<?php echo $form->textField($model,'numero_maximo_meses_proyecto'); ?>
			<?php echo $form->error($model,'numero_maximo_meses_proyecto'); ?>
		</div>
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'monto_total_convocatoria'); ?>
			<?php echo $form->textField($model,'monto_total_convocatoria'); ?>
			<?php echo $form->error($model,'monto_total_convocatoria'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<?php echo $form->labelEx($model,'convenio'); ?>
			<?php echo $form->textField($model,'convenio',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'convenio'); ?>
		</div>	
	</div>

	<div class="row">
		<div class="col-lg-8">
			<?php echo $form->labelEx($model,'cdp'); ?>
			<?php echo $form->textField($model,'cdp',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'cdp'); ?>
		</div>
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'fecha_cdp'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_cdp',
				'value'=>$model->fecha_cdp,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly",'style'=>'border-radius: 7px; border-color: rgb(211,211,211);'),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_cdp,
				'dateFormat'=>'yy-mm-dd',
				'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.png',
				'buttonImageOnly'=>true,
				'buttonText'=>'Fecha',
				'selectOtherMonths'=>true,
				'showAnim'=>'slide',
				'showButtonPanel'=>true,
				'showOn'=>'button', 
				'showOtherMonths'=>true, 
				'changeMonth' => 'true', 
				'changeYear' => 'true', 
				'minDate'=>'1900-01-01', 
				'maxDate'=> '0',
				),
			));?>
			<?php echo $form->error($model,'fecha_cdp'); ?>
		</div>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'fecha_cdp'); ?>
		<?php echo $form->textField($model,'fecha_cdp'); ?>
		<?php echo $form->error($model,'fecha_cdp'); ?>
	</div>-->

	<div class="row">
		<div class="col-lg-8">
			<?php echo $form->labelEx($model,'cdr'); ?>
			<?php echo $form->textField($model,'cdr',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'cdr'); ?>
		</div>
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'fecha_cdr'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_cdr',
				'value'=>$model->fecha_cdr,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly",'style'=>'border-radius: 7px; border-color: rgb(211,211,211);'),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_cdr,
				'dateFormat'=>'yy-mm-dd',
				'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.png',
				'buttonImageOnly'=>true,
				'buttonText'=>'Fecha',
				'selectOtherMonths'=>true,
				'showAnim'=>'slide',
				'showButtonPanel'=>true,
				'showOn'=>'button', 
				'showOtherMonths'=>true, 
				'changeMonth' => 'true', 
				'changeYear' => 'true', 
				'minDate'=>'1900-01-01', 
				'maxDate'=> '0',
				),
			));?>
			<?php echo $form->error($model,'fecha_cdr'); ?>
		</div>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'fecha_cdr'); ?>
		<?php echo $form->textField($model,'fecha_cdr'); ?>
		<?php echo $form->error($model,'fecha_cdr'); ?>
	</div>-->

	<div class="row">
		<div class="col-lg-8">
			<?php echo $form->labelEx($model,'url'); ?>
			<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'url'); ?>
		</div>	
	</div>

	<div class="row">
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'linea_investigacion'); ?>
			<?php echo $form->DropDownList($model,'linea_investigacion',array('empty'=>'Seleccione', 'Gran Linea'=>'Gran Linea', 'Linea'=>'Linea', 'Disciplina'=>'Disciplina')); ?>
			<?php echo $form->error($model,'linea_investigacion'); ?>
		</div>	
	</div>

	<div class="row">
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'postulacion_anticipada'); ?>
			<?php echo $form->DropDownList($model,'postulacion_anticipada',array('empty'=>'Seleccione', 'Si'=>'Si', 'No'=>'No')); ?>
			<?php echo $form->error($model,'postulacion_anticipada'); ?>
		</div>	
	</div>

	<div class="row">
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'definir_estructura_convocatoria'); ?>
			<?php echo $form->DropDownList($model,'definir_estructura_convocatoria',array('empty'=>'Seleccione', 'Plantilla1'=>'Plantilla1',
			'Plantilla2'=>'Plantilla2','Plantilla3'=>'Plantilla3','Plantilla4'=>'Plantilla4','Plantilla5'=>'Plantilla5',)); ?>
			<?php echo $form->error($model,'definir_estructura_convocatoria'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4">
			<?php echo $form->labelEx($model,'numero_proyecto_inversion'); ?>
			<?php echo $form->textField($model,'numero_proyecto_inversion'); ?>
			<?php echo $form->error($model,'numero_proyecto_inversion'); ?>
		</div>
		<div class="col-lg-8">
			<?php echo $form->labelEx($model,'vigencia'); ?>
			<?php echo $form->textField($model,'vigencia',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'vigencia'); ?>
		</div>
	</div>

	<div class="row buttons">
		<div class="col-lg-4">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Aceptar' : 'Save'); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->