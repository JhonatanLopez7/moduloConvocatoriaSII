<?php
class anexoTest extends PHPUnit_Framework_TestCase{
	
	public function testCreate(){

		$convocatoria = new Convocatoria;
		$convocatoria->tipo_convocatoria='Proyectos';
 		$convocatoria->subtipo_convocatoria='Investigacion';
 		$convocatoria->convocatoria_programa='Si';
		$convocatoria->tipo_financiacion='Cofinanciacion';
 		$convocatoria->fecha_apertura='2014-11-19';
 		$convocatoria->fecha_cierre='2014-11-19';
		$convocatoria->fecha_resultado_preliminar='2014-11-19';
		$convocatoria->fecha_resultado_definitivo='2014-11-19';
		$convocatoria->convocatoria='convocatoria 1';
		$convocatoria->codigo_convocatoria=1;
		$convocatoria->descripcion='Convocatoria para jovenes Investigadores';
		$convocatoria->objeto='Universidades del pais';
		$convocatoria->programa_base='Ingenieria';
		$convocatoria->instituciones_financiadoras='Gobernacion';
		$convocatoria->maximo_porcentaje_financiar=100;
	 	$convocatoria->minimo_porcentaje_financiar=70;
 		$convocatoria->minimo_porcentaje_contrapartida_dinero=100;
		$convocatoria->minimo_porcentaje_contrapartida_especie=100;
		$convocatoria->monto_maximo_financiar=8000000000;
 		$convocatoria->numero_maximo_meses_proyecto=2;
 		$convocatoria->monto_total_convocatoria=30000000000;
		$convocatoria->convenio='Institucional';
		$convocatoria->cdp=1;
 		$convocatoria->fecha_cdp='2014-11-19';
		$convocatoria->cdr=1;
		$convocatoria->fecha_cdr='2014-11-19';
		$convocatoria->url='www.colciencias.com.co';
		$convocatoria->linea_investigacion='Gran linea';
		$convocatoria->postulacion_anticipada='Si';
		$convocatoria->definir_estructura_convocatoria='Plantilla1';
		$convocatoria->numero_proyecto_inversion=1;
		$convocatoria->vigencia=1;

		$this->assertTrue($convocatoria->save());

		$anexo=new Anexo();
		$anexo->codigo=2;
		$anexo->convocatoria=1;
		$anexo->nombre='convocatoria';
		$anexo->ruta='c:/anexo';
		$anexo->fecha='2014-11-19';

		$this->assertTrue($anexo->save());
		$anexo->delete();
		$convocatoria->delete();
	}
	public function testBuscar(){

		$convocatoria = new Convocatoria;
		$convocatoria->tipo_convocatoria='Proyectos';
 		$convocatoria->subtipo_convocatoria='Investigacion';
 		$convocatoria->convocatoria_programa='Si';
		$convocatoria->tipo_financiacion='Cofinanciacion';
 		$convocatoria->fecha_apertura='2014-11-19';
 		$convocatoria->fecha_cierre='2014-11-19';
		$convocatoria->fecha_resultado_preliminar='2014-11-19';
		$convocatoria->fecha_resultado_definitivo='2014-11-19';
		$convocatoria->convocatoria='convocatoria 1';
		$convocatoria->codigo_convocatoria=1;
		$convocatoria->descripcion='Convocatoria para jovenes Investigadores';
		$convocatoria->objeto='Universidades del pais';
		$convocatoria->programa_base='Ingenieria';
		$convocatoria->instituciones_financiadoras='Gobernacion';
		$convocatoria->maximo_porcentaje_financiar=100;
	 	$convocatoria->minimo_porcentaje_financiar=70;
 		$convocatoria->minimo_porcentaje_contrapartida_dinero=100;
		$convocatoria->minimo_porcentaje_contrapartida_especie=100;
		$convocatoria->monto_maximo_financiar=8000000000;
 		$convocatoria->numero_maximo_meses_proyecto=2;
 		$convocatoria->monto_total_convocatoria=30000000000;
		$convocatoria->convenio='Institucional';
		$convocatoria->cdp=1;
 		$convocatoria->fecha_cdp='2014-11-19';
		$convocatoria->cdr=1;
		$convocatoria->fecha_cdr='2014-11-19';
		$convocatoria->url='www.colciencias.com.co';
		$convocatoria->linea_investigacion='Gran linea';
		$convocatoria->postulacion_anticipada='Si';
		$convocatoria->definir_estructura_convocatoria='Plantilla1';
		$convocatoria->numero_proyecto_inversion=1;
		$convocatoria->vigencia=1;

		$this->assertTrue($convocatoria->save());

		$anexo=new Anexo();
		$anexo->codigo=2;
		$anexo->convocatoria=1;
		$anexo->nombre='convocatoria';
		$anexo->ruta='c:/anexo';
		$anexo->fecha='2014-11-19';

		$this->assertTrue($anexo->save());
	 	$aux = $anexo->findByPk(2);
	 	$this->assertNotNull($aux);
	 	$anexo->delete();
	 	$convocatoria->delete();
	}
	public function testUpdate(){

		$convocatoria = new Convocatoria;
		$convocatoria->tipo_convocatoria='Proyectos';
 		$convocatoria->subtipo_convocatoria='Investigacion';
 		$convocatoria->convocatoria_programa='Si';
		$convocatoria->tipo_financiacion='Cofinanciacion';
 		$convocatoria->fecha_apertura='2014-11-19';
 		$convocatoria->fecha_cierre='2014-11-19';
		$convocatoria->fecha_resultado_preliminar='2014-11-19';
		$convocatoria->fecha_resultado_definitivo='2014-11-19';
		$convocatoria->convocatoria='convocatoria 1';
		$convocatoria->codigo_convocatoria=1;
		$convocatoria->descripcion='Convocatoria para jovenes Investigadores';
		$convocatoria->objeto='Universidades del pais';
		$convocatoria->programa_base='Ingenieria';
		$convocatoria->instituciones_financiadoras='Gobernacion';
		$convocatoria->maximo_porcentaje_financiar=100;
	 	$convocatoria->minimo_porcentaje_financiar=70;
 		$convocatoria->minimo_porcentaje_contrapartida_dinero=100;
		$convocatoria->minimo_porcentaje_contrapartida_especie=100;
		$convocatoria->monto_maximo_financiar=8000000000;
 		$convocatoria->numero_maximo_meses_proyecto=2;
 		$convocatoria->monto_total_convocatoria=30000000000;
		$convocatoria->convenio='Institucional';
		$convocatoria->cdp=1;
 		$convocatoria->fecha_cdp='2014-11-19';
		$convocatoria->cdr=1;
		$convocatoria->fecha_cdr='2014-11-19';
		$convocatoria->url='www.colciencias.com.co';
		$convocatoria->linea_investigacion='Gran linea';
		$convocatoria->postulacion_anticipada='Si';
		$convocatoria->definir_estructura_convocatoria='Plantilla1';
		$convocatoria->numero_proyecto_inversion=1;
		$convocatoria->vigencia=1;

		$this->assertTrue($convocatoria->save());

		$anexo=new Anexo();
		$anexo->codigo=2;
		$anexo->convocatoria=1;
		$anexo->nombre='convocatoria';
		$anexo->ruta='c:/anexo';
		$anexo->fecha='2014-11-19';

		$this->assertTrue($anexo->save());
	 	$aux = $anexo->findByPk(2);
	 	$aux->nombre='convocatoria nueva';
	 	$this->assertTrue($anexo->update());
	 	$aux->delete();
	 	$convocatoria->delete();
	}
	public function testDelete(){

		$convocatoria = new Convocatoria;
		$convocatoria->tipo_convocatoria='Proyectos';
 		$convocatoria->subtipo_convocatoria='Investigacion';
 		$convocatoria->convocatoria_programa='Si';
		$convocatoria->tipo_financiacion='Cofinanciacion';
 		$convocatoria->fecha_apertura='2014-11-19';
 		$convocatoria->fecha_cierre='2014-11-19';
		$convocatoria->fecha_resultado_preliminar='2014-11-19';
		$convocatoria->fecha_resultado_definitivo='2014-11-19';
		$convocatoria->convocatoria='convocatoria 1';
		$convocatoria->codigo_convocatoria=1;
		$convocatoria->descripcion='Convocatoria para jovenes Investigadores';
		$convocatoria->objeto='Universidades del pais';
		$convocatoria->programa_base='Ingenieria';
		$convocatoria->instituciones_financiadoras='Gobernacion';
		$convocatoria->maximo_porcentaje_financiar=100;
	 	$convocatoria->minimo_porcentaje_financiar=70;
 		$convocatoria->minimo_porcentaje_contrapartida_dinero=100;
		$convocatoria->minimo_porcentaje_contrapartida_especie=100;
		$convocatoria->monto_maximo_financiar=8000000000;
 		$convocatoria->numero_maximo_meses_proyecto=2;
 		$convocatoria->monto_total_convocatoria=30000000000;
		$convocatoria->convenio='Institucional';
		$convocatoria->cdp=1;
 		$convocatoria->fecha_cdp='2014-11-19';
		$convocatoria->cdr=1;
		$convocatoria->fecha_cdr='2014-11-19';
		$convocatoria->url='www.colciencias.com.co';
		$convocatoria->linea_investigacion='Gran linea';
		$convocatoria->postulacion_anticipada='Si';
		$convocatoria->definir_estructura_convocatoria='Plantilla1';
		$convocatoria->numero_proyecto_inversion=1;
		$convocatoria->vigencia=1;

		$this->assertTrue($convocatoria->save());

		$anexo=new Anexo();
		$anexo->codigo=2;
		$anexo->convocatoria=1;
		$anexo->nombre='convocatoria';
		$anexo->ruta='c:/anexo';
		$anexo->fecha='2014-11-19';
		
		$this->assertTrue($anexo->save());
	 	$this->assertTrue($anexo->delete());
	 	$convocatoria->delete();
	}
}	
?>