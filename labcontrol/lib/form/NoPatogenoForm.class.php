<?php

/**
 * NoPatogeno form.
 *
 * @package    labcontrol
 * @subpackage form
 * @author     Your name here
 */
class NoPatogenoForm extends BaseNoPatogenoForm
{
  public function configure()
  {
		$this->removeFields();
  }
  public function removeFields(){
		unset($this['created_at'], $this['updated_at'],$this['hora_recepcion']);
	}
}
