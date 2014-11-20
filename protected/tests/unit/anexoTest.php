<?php
class anexoTest extends PHPUnit_Framework_TestCase{
	
	public function testCreate(){
		$anexo=new Anexo();
		$anexo->convocatoria=1;
		$anexo->nombre='convocatoria';
		$anexo->ruta='c:/anexo';
		$anexo->fecha='2014-11-19';
		$this->assertTrue($anexo->save());
	}
	public function testBuscar(){
		$anexo=new Anexo();
		$anexo->convocatoria=1;
		$anexo->nombre='convocatoria';
		$anexo->ruta='c:/anexo';
		$anexo->fecha='2014-11-19';
		$this->assertTrue($anexo->save());
	}
	public function testUpdate(){
		$anexo=new Anexo();
		$anexo->convocatoria=1;
		$anexo->nombre='convocatoria';
		$anexo->ruta='c:/anexo';
		$anexo->fecha='2014-11-19';
		$this->assertTrue($anexo->save());
	}
	public function testDelete(){
		$anexo=new Anexo();
		$anexo->convocatoria=1;
		$anexo->nombre='convocatoria';
		$anexo->ruta='c:/anexo';
		$anexo->fecha='2014-11-19';
		$this->assertTrue($anexo->save());
	}
}	
?>