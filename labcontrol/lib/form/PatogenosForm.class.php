<?php

/**
 * Patogenos form.
 *
 * @package    labcontrol
 * @subpackage form
 * @author     Your name here
 */
class PatogenosForm extends BasePatogenosForm
{
  public function configure()
  {
		$this->removeFields();
  }
  public function removeFields(){
		unset($this['created_at'], $this['updated_at'],$this['hora_recepcion']);
	}
}
