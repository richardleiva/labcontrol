<?php

/**
 * Muestra filter form.
 *
 * @package    labcontrol
 * @subpackage filter
 * @author     Your name here
 */
class MuestraFormFilter extends BaseMuestraFormFilter
{
  public function configure()
  {
		$this->removeFields();
  }
  public function removeFields(){
		unset($this['created_at'], $this['updated_at'],$this['hora_recepcion']);
	}
}
