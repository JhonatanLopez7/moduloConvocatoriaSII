<?php
class anexoTest extends PHPUnit_Framework_TestCase{
	
	public function testCreate(){
		$rubro=new Rubro();
		$rubro->codigo=1;
		$rubro->rubro='Rubro 1';
		$rubro->operacion='igual';
		$rubro->porcentaje=0.5;
		$rubro->variable_de_control='Total del proyecto';
		$rubro->rubro_convocatoria=1;

		$this->assertTrue($rubro->save());
		$rubro->delete();
	}
	public function testBuscar(){
		$rubro=new Rubro();
		$rubro->codigo=1;
		$rubro->rubro='Rubro 1';
		$rubro->operacion='igual';
		$rubro->porcentaje=0.5;
		$rubro->variable_de_control='Total del proyecto';
		$rubro->rubro_convocatoria=1;
		
		$this->assertTrue($rubro->save());
	 	$aux = $rubro->findByPk(1);
	 	$this->assertNotNull($aux);
	 	$rubro->delete();
	}
	public function testUpdate(){
		$rubro=new Rubro();
		$rubro->codigo=1;
		$rubro->rubro='Rubro 1';
		$rubro->operacion='igual';
		$rubro->porcentaje=0.5;
		$rubro->variable_de_control='Total del proyecto';
		$rubro->rubro_convocatoria=1;
		
		$this->assertTrue($rubro->save());
	 	$aux = $rubro->findByPk(1);
	 	$aux->rubro='Rubro 3';
	 	$aux->porcentaje=0.2;
	 	$this->assertTrue($rubro->update());
	 	$aux->delete();
	}
	public function testDelete(){
		$rubro=new Rubro();
		$rubro->codigo=1;
		$rubro->rubro='Rubro 1';
		$rubro->operacion='igual';
		$rubro->porcentaje=0.5;
		$rubro->variable_de_control='Total del proyecto';
		$rubro->rubro_convocatoria=1;
		
		$this->assertTrue($rubro->save());
	 	$this->assertTrue($rubro->delete());
	}
}	
?>