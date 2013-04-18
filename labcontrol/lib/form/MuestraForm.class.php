<?php

/**
 * Muestra form.
 *
 * @package    labcontrol
 * @subpackage form
 * @author     Your name here
 */
class MuestraForm extends BaseMuestraForm
{
  public function removeFields(){
		unset($this['created_at'], $this['updated_at'],$this['hora_recepcion']);
	}	
	public function configure()
  {
    parent::configure();
	$this->removeFields();
	
	$muestra_has_metodo = new MuestraHasMetodoForm();
	$this->embedForm('muestraHasMetodo',$muestra_has_metodo);
  }
  
}
