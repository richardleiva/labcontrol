<?php

/**
 * Resultado filter form base class.
 *
 * @package    labcontrol
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseResultadoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'pre_enriq_id'         => new sfWidgetFormPropelChoice(array('model' => 'PreEnriq', 'add_empty' => true)),
      'enriq_id'             => new sfWidgetFormPropelChoice(array('model' => 'Enriq', 'add_empty' => true)),
      'medio_id'             => new sfWidgetFormPropelChoice(array('model' => 'Medio', 'add_empty' => true)),
      'temp_incubacion_id'   => new sfWidgetFormPropelChoice(array('model' => 'TempIncubacion', 'add_empty' => true)),
      'tiempo_incubacion_id' => new sfWidgetFormPropelChoice(array('model' => 'TiempoIncubacion', 'add_empty' => true)),
      'muestra_id'           => new sfWidgetFormPropelChoice(array('model' => 'Muestra', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'pre_enriq_id'         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'PreEnriq', 'column' => 'id')),
      'enriq_id'             => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Enriq', 'column' => 'id')),
      'medio_id'             => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Medio', 'column' => 'id')),
      'temp_incubacion_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TempIncubacion', 'column' => 'id')),
      'tiempo_incubacion_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TiempoIncubacion', 'column' => 'id')),
      'muestra_id'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Muestra', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('resultado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Resultado';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
      'pre_enriq_id'         => 'ForeignKey',
      'enriq_id'             => 'ForeignKey',
      'medio_id'             => 'ForeignKey',
      'temp_incubacion_id'   => 'ForeignKey',
      'tiempo_incubacion_id' => 'ForeignKey',
      'muestra_id'           => 'ForeignKey',
    );
  }
}
