<?php

/**
 * Patogenos filter form base class.
 *
 * @package    labcontrol
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePatogenosFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_prueba'               => new sfWidgetFormFilterInput(),
      'created_at'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'resultado_id'                => new sfWidgetFormPropelChoice(array('model' => 'Resultado', 'add_empty' => true)),
      'campo_resultado_patogeno_id' => new sfWidgetFormPropelChoice(array('model' => 'CampoResultadoPatogeno', 'add_empty' => true)),
      'prueba_bioquimica_id'        => new sfWidgetFormPropelChoice(array('model' => 'PruebaBioquimica', 'add_empty' => true)),
      'positivo_negativo_id'        => new sfWidgetFormPropelChoice(array('model' => 'PositivoNegativo', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre_prueba'               => new sfValidatorPass(array('required' => false)),
      'created_at'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'resultado_id'                => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Resultado', 'column' => 'id')),
      'campo_resultado_patogeno_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'CampoResultadoPatogeno', 'column' => 'id')),
      'prueba_bioquimica_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'PruebaBioquimica', 'column' => 'id')),
      'positivo_negativo_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'PositivoNegativo', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('patogenos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Patogenos';
  }

  public function getFields()
  {
    return array(
      'id'                          => 'Number',
      'nombre_prueba'               => 'Text',
      'created_at'                  => 'Date',
      'updated_at'                  => 'Date',
      'resultado_id'                => 'ForeignKey',
      'campo_resultado_patogeno_id' => 'ForeignKey',
      'prueba_bioquimica_id'        => 'ForeignKey',
      'positivo_negativo_id'        => 'ForeignKey',
    );
  }
}
