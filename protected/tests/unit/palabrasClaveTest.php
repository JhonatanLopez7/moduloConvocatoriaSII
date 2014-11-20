<?php
class palabrasClaveTest extends PHPUnit_Framework_TestCase{
	
	public function testCreate(){
		$palabrasClave=new palabrasClave();
		$palabrasClave->convocatoria=1;
		$palabrasClave->nombre='Habilitado';
		$palabrasClave->cantidad=1;
		$palabrasClave->codigo=1;
		$this->assertTrue($anexo->save());
	}
	public function testBuscar(){
		$palabrasClave=new palabrasClave();
		$palabrasClave->convocatoria=1;
		$palabrasClave->nombre='Habilitado';
		$palabrasClave->cantidad=1;
		$palabrasClave->codigo=1;
		$this->assertTrue($anexo->save());
	}
	public function testUpdate(){
		$palabrasClave=new palabrasClave();
		$palabrasClave->convocatoria=1;
		$palabrasClave->nombre='Habilitado';
		$palabrasClave->cantidad=1;
		$palabrasClave->codigo=1;
		$this->assertTrue($anexo->save());
	}
	public function testDelete(){
		$palabrasClave=new palabrasClave();
		$palabrasClave->convocatoria=1;
		$palabrasClave->nombre='Habilitado';
		$palabrasClave->cantidad=1;
		$palabrasClave->codigo=1;
		$this->assertTrue($anexo->save());
	}
}
?>	