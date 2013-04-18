<?php

/**
 * Patogenos form base class.
 *
 * @method Patogenos getObject() Returns the current form's model object
 *
 * @package    labcontrol
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePatogenosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                          => new sfWidgetFormInputHidden(),
      'nombre_prueba'               => new sfWidgetFormInputText(),
      'created_at'                  => new sfWidgetFormDateTime(),
      'updated_at'                  => new sfWidgetFormDateTime(),
      'resultado_id'                => new sfWidgetFormPropelChoice(array('model' => 'Resultado', 'add_empty' => false)),
      'campo_resultado_patogeno_id' => new sfWidgetFormPropelChoice(array('model' => 'CampoResultadoPatogeno', 'add_empty' => false)),
      'prueba_bioquimica_id'        => new sfWidgetFormPropelChoice(array('model' => 'PruebaBioquimica', 'add_empty' => false)),
      'positivo_negativo_id'        => new sfWidgetFormPropelChoice(array('model' => 'PositivoNegativo', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre_prueba'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'created_at'                  => new sfValidatorDateTime(array('required' => false)),
      'updated_at'                  => new sfValidatorDateTime(array('required' => false)),
      'resultado_id'                => new sfValidatorPropelChoice(array('model' => 'Resultado', 'column' => 'id')),
      'campo_resultado_patogeno_id' => new sfValidatorPropelChoice(array('model' => 'CampoResultadoPatogeno', 'column' => 'id')),
      'prueba_bioquimica_id'        => new sfValidatorPropelChoice(array('model' => 'PruebaBioquimica', 'column' => 'id')),
      'positivo_negativo_id'        => new sfValidatorPropelChoice(array('model' => 'PositivoNegativo', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('patogenos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Patogenos';
  }


}
