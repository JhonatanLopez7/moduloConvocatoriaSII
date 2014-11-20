<?php
class anexoTest extends PHPUnit_Framework_TestCase{
	
	public function testCreate(){
		$anexo=new Anexo();
		$anexo->codigo=2;
		$anexo->convocatoria=1;
		$anexo->nombre='convocatoria';
		$anexo->ruta='c:/anexo';
		$anexo->fecha='2014-11-19';

		$this->assertTrue($anexo->save());
		$anexo->delete();
	}
	public function testBuscar(){
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
	}
	public function testUpdate(){
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
	}
	public function testDelete(){
		$anexo=new Anexo();
		$anexo->codigo=2;
		$anexo->convocatoria=1;
		$anexo->nombre='convocatoria';
		$anexo->ruta='c:/anexo';
		$anexo->fecha='2014-11-19';
		
		$this->assertTrue($anexo->save());
	 	$this->assertTrue($anexo->delete());
	}
}	
?>