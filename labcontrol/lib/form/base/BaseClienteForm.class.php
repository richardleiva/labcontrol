<?php

/**
 * Cliente form base class.
 *
 * @method Cliente getObject() Returns the current form's model object
 *
 * @package    labcontrol
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseClienteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'cedula'     => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
      'apellido'   => new sfWidgetFormInputText(),
      'direccion'  => new sfWidgetFormInputText(),
      'telefono'   => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'cedula'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'apellido'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'direccion'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'telefono'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'email'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cliente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliente';
  }


}
