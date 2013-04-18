<?php

/**
 * Cliente form.
 *
 * @package    labcontrol
 * @subpackage form
 * @author     Your name here
 */
class ClienteForm extends BaseClienteForm
{
  public function configure()
  {
		$this->removeFields();
  }
  public function removeFields(){
		unset($this['created_at'], $this['updated_at']);
	}
}
