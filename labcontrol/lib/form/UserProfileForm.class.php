<?php

/**
 * UserProfile form.
 *
 * @package    labcontrol
 * @subpackage form
 * @author     Your name here
 */
class UserProfileForm extends BaseUserProfileForm
{
  public function configure()
  {
		$this->removeFields();
  }
  public function removeFields(){
		unset($this['created_at'], $this['updated_at']);
	}
}
