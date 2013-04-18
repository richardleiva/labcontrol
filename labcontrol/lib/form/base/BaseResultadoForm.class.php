<?php

/**
 * Resultado form base class.
 *
 * @method Resultado getObject() Returns the current form's model object
 *
 * @package    labcontrol
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseResultadoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
      'pre_enriq_id'         => new sfWidgetFormPropelChoice(array('model' => 'PreEnriq', 'add_empty' => false)),
      'enriq_id'             => new sfWidgetFormPropelChoice(array('model' => 'Enriq', 'add_empty' => false)),
      'medio_id'             => new sfWidgetFormPropelChoice(array('model' => 'Medio', 'add_empty' => false)),
      'temp_incubacion_id'   => new sfWidgetFormPropelChoice(array('model' => 'TempIncubacion', 'add_empty' => false)),
      'tiempo_incubacion_id' => new sfWidgetFormPropelChoice(array('model' => 'TiempoIncubacion', 'add_empty' => false)),
      'muestra_id'           => new sfWidgetFormPropelChoice(array('model' => 'Muestra', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'created_at'           => new sfValidatorDateTime(array('required' => false)),
      'updated_at'           => new sfValidatorDateTime(array('required' => false)),
      'pre_enriq_id'         => new sfValidatorPropelChoice(array('model' => 'PreEnriq', 'column' => 'id')),
      'enriq_id'             => new sfValidatorPropelChoice(array('model' => 'Enriq', 'column' => 'id')),
      'medio_id'             => new sfValidatorPropelChoice(array('model' => 'Medio', 'column' => 'id')),
      'temp_incubacion_id'   => new sfValidatorPropelChoice(array('model' => 'TempIncubacion', 'column' => 'id')),
      'tiempo_incubacion_id' => new sfValidatorPropelChoice(array('model' => 'TiempoIncubacion', 'column' => 'id')),
      'muestra_id'           => new sfValidatorPropelChoice(array('model' => 'Muestra', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('resultado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Resultado';
  }


}
