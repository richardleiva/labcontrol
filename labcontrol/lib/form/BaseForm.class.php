<?php

/**
 * Base project form.
 * 
 * @package    labcontrol
 * @subpackage form
 * @author     Your name here 
 * @version    SVN: $Id: BaseForm.class.php 20147 2009-07-13 11:46:57Z FabianLange $
 */
class BaseForm extends sfFormSymfony
{
	public function configure(){
		$this->removeFields();
	}
	public function removeFields(){
		unset($this['created_at'], $this['updated_at']);
	}
}
