<?php
/* @var $this ConvocatoriaController */
/* @var $data Convocatoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_convocatoria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_convocatoria), array('view', 'id'=>$data->codigo_convocatoria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_convocatoria')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_convocatoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtipo_convocatoria')); ?>:</b>
	<?php echo CHtml::encode($data->subtipo_convocatoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convocatoria_programa')); ?>:</b>
	<?php echo CHtml::encode($data->convocatoria_programa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_financiacion')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_financiacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_apertura')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_apertura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_cierre')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_cierre); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_resultado_preliminar')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_resultado_preliminar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_resultado_definitivo')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_resultado_definitivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convocatoria')); ?>:</b>
	<?php echo CHtml::encode($data->convocatoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objeto')); ?>:</b>
	<?php echo CHtml::encode($data->objeto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirigido_a')); ?>:</b>
	<?php echo CHtml::encode($data->dirigido_a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('programa_base')); ?>:</b>
	<?php echo CHtml::encode($data->programa_base); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('instituciones_financiadoras')); ?>:</b>
	<?php echo CHtml::encode($data->instituciones_financiadoras); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maximo_porcentaje_financiar')); ?>:</b>
	<?php echo CHtml::encode($data->maximo_porcentaje_financiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimo_porcentaje_financiar')); ?>:</b>
	<?php echo CHtml::encode($data->minimo_porcentaje_financiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimo_porcentaje_contrapartida_dinero')); ?>:</b>
	<?php echo CHtml::encode($data->minimo_porcentaje_contrapartida_dinero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimo_porcentaje_contrapartida_especie')); ?>:</b>
	<?php echo CHtml::encode($data->minimo_porcentaje_contrapartida_especie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_maximo_financiar')); ?>:</b>
	<?php echo CHtml::encode($data->monto_maximo_financiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_maximo_meses_proyecto')); ?>:</b>
	<?php echo CHtml::encode($data->numero_maximo_meses_proyecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_total_convocatoria')); ?>:</b>
	<?php echo CHtml::encode($data->monto_total_convocatoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convenio')); ?>:</b>
	<?php echo CHtml::encode($data->convenio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cdp')); ?>:</b>
	<?php echo CHtml::encode($data->cdp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_cdp')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_cdp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cdr')); ?>:</b>
	<?php echo CHtml::encode($data->cdr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_cdr')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_cdr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('linea_investigacion')); ?>:</b>
	<?php echo CHtml::encode($data->linea_investigacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postulacion_anticipada')); ?>:</b>
	<?php echo CHtml::encode($data->postulacion_anticipada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('definir_estructura_convocatoria')); ?>:</b>
	<?php echo CHtml::encode($data->definir_estructura_convocatoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_proyecto_inversion')); ?>:</b>
	<?php echo CHtml::encode($data->numero_proyecto_inversion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vigencia')); ?>:</b>
	<?php echo CHtml::encode($data->vigencia); ?>
	<br />

	*/ ?>

</div>