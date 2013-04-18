<?php

/**
 * Cliente filter form.
 *
 * @package    labcontrol
 * @subpackage filter
 * @author     Your name here
 */
class ClienteFormFilter extends BaseClienteFormFilter
{
 public function configure()
  {
		$this->removeFields();
  }
  public function removeFields(){
		unset($this['created_at'], $this['updated_at']);
	}
}
