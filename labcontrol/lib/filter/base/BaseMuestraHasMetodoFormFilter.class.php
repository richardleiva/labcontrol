<?php

/**
 * MuestraHasMetodo filter form base class.
 *
 * @package    labcontrol
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseMuestraHasMetodoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'muestra_id' => new sfWidgetFormPropelChoice(array('model' => 'Muestra', 'add_empty' => true)),
      'metodo_id'  => new sfWidgetFormPropelChoice(array('model' => 'Metodo', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'muestra_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Muestra', 'column' => 'id')),
      'metodo_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Metodo', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('muestra_has_metodo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'MuestraHasMetodo';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'muestra_id' => 'ForeignKey',
      'metodo_id'  => 'ForeignKey',
    );
  }
}
