<?php

/**
 * NoPatogeno form base class.
 *
 * @method NoPatogeno getObject() Returns the current form's model object
 *
 * @package    labcontrol
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNoPatogenoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'cantidad'     => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'resultado_id' => new sfWidgetFormPropelChoice(array('model' => 'Resultado', 'add_empty' => false)),
      'dilucion_id'  => new sfWidgetFormPropelChoice(array('model' => 'Dilucion', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'cantidad'     => new sfValidatorNumber(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
      'updated_at'   => new sfValidatorDateTime(array('required' => false)),
      'resultado_id' => new sfValidatorPropelChoice(array('model' => 'Resultado', 'column' => 'id')),
      'dilucion_id'  => new sfValidatorPropelChoice(array('model' => 'Dilucion', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('no_patogeno[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NoPatogeno';
  }


}
