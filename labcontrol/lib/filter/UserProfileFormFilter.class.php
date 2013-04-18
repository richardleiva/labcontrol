<?php

/**
 * UserProfile filter form.
 *
 * @package    labcontrol
 * @subpackage filter
 * @author     Your name here
 */
class UserProfileFormFilter extends BaseUserProfileFormFilter
{
  public function configure()
  {
		$this->removeFields();
  }
  public function removeFields(){
		unset($this['created_at'], $this['updated_at']);
	}
}
