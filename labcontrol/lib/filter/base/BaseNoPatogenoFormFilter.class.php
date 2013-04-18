<?php

/**
 * NoPatogeno filter form base class.
 *
 * @package    labcontrol
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseNoPatogenoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cantidad'     => new sfWidgetFormFilterInput(),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'resultado_id' => new sfWidgetFormPropelChoice(array('model' => 'Resultado', 'add_empty' => true)),
      'dilucion_id'  => new sfWidgetFormPropelChoice(array('model' => 'Dilucion', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'cantidad'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'resultado_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Resultado', 'column' => 'id')),
      'dilucion_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Dilucion', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('no_patogeno_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NoPatogeno';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'cantidad'     => 'Number',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
      'resultado_id' => 'ForeignKey',
      'dilucion_id'  => 'ForeignKey',
    );
  }
}
