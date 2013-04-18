<?php

/**
 * Resultado form.
 *
 * @package    labcontrol
 * @subpackage form
 * @author     Your name here
 */
class ResultadoForm extends BaseResultadoForm
{
  public function configure()
  {
		$this->removeFields();
  }
  public function removeFields(){
		unset($this['created_at'], $this['updated_at']);
	}
}
