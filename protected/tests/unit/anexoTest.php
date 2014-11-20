<?php
class anexoTest extends PHPUnit_Framework_TestCase{
	
	public function createTest(){
		$anexo=new Anexo();
		$anexo->convocatoria=1;
		$anexo->nombre='convocatoria';
		$anexo->ruta='c:/anexo';
		$anexo->fecha='2014-11-19';
		$this->assertTrue($anexo->save());
	}
	public function createBuscar(){
		$anexo=new Anexo();
		$anexo->convocatoria=1;
		$anexo->nombre='convocatoria';
		$anexo->ruta='c:/anexo';
		$anexo->fecha='2014-11-19';
		$this->assertTrue($anexo->save());
	}
	public function createUpdate(){
		$anexo=new Anexo();
		$anexo->convocatoria=1;
		$anexo->nombre='convocatoria';
		$anexo->ruta='c:/anexo';
		$anexo->fecha='2014-11-19';
		$this->assertTrue($anexo->save());
	}
	public function createDelete(){
		$anexo=new Anexo();
		$anexo->convocatoria=1;
		$anexo->nombre='convocatoria';
		$anexo->ruta='c:/anexo';
		$anexo->fecha='2014-11-19';
		$this->assertTrue($anexo->save());
	}
}	
?>