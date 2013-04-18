<?php

/**
 * MuestraHasMetodo form base class.
 *
 * @method MuestraHasMetodo getObject() Returns the current form's model object
 *
 * @package    labcontrol
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseMuestraHasMetodoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'muestra_id' => new sfWidgetFormPropelChoice(array('model' => 'Muestra', 'add_empty' => false)),
      'metodo_id'  => new sfWidgetFormPropelChoice(array('model' => 'Metodo', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'muestra_id' => new sfValidatorPropelChoice(array('model' => 'Muestra', 'column' => 'id')),
      'metodo_id'  => new sfValidatorPropelChoice(array('model' => 'Metodo', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('muestra_has_metodo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'MuestraHasMetodo';
  }


}
