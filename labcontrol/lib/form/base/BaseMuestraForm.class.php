<?php

/**
 * Muestra form base class.
 *
 * @method Muestra getObject() Returns the current form's model object
 *
 * @package    labcontrol
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseMuestraForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'nombre_responsable'         => new sfWidgetFormInputText(),
      'fecha_recepcion'            => new sfWidgetFormDateTime(),
      'fecha_entrega'              => new sfWidgetFormDateTime(),
      'hora_recepcion'             => new sfWidgetFormDateTime(),
      'codigo_interno'             => new sfWidgetFormInputText(),
      'cantidad'                   => new sfWidgetFormInputText(),
      'temperatura_recepcion'      => new sfWidgetFormInputText(),
      'temperatura_almacenamiento' => new sfWidgetFormInputText(),
      'observaciones'              => new sfWidgetFormTextarea(),
      'created_at'                 => new sfWidgetFormDateTime(),
      'updated_at'                 => new sfWidgetFormDateTime(),
      'usuario_id'                 => new sfWidgetFormPropelChoice(array('model' => 'UserProfile', 'add_empty' => false)),
      'muestreo_id'                => new sfWidgetFormPropelChoice(array('model' => 'Muestreo', 'add_empty' => false)),
      'presentacion_id'            => new sfWidgetFormPropelChoice(array('model' => 'Presentacion', 'add_empty' => false)),
      'norma_id'                   => new sfWidgetFormPropelChoice(array('model' => 'Norma', 'add_empty' => false)),
      'cliente_id'                 => new sfWidgetFormPropelChoice(array('model' => 'Cliente', 'add_empty' => false)),
      'tipo_muestra_id'            => new sfWidgetFormPropelChoice(array('model' => 'TipoMuestra', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre_responsable'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fecha_recepcion'            => new sfValidatorDateTime(array('required' => false)),
      'fecha_entrega'              => new sfValidatorDateTime(array('required' => false)),
      'hora_recepcion'             => new sfValidatorDateTime(array('required' => false)),
      'codigo_interno'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cantidad'                   => new sfValidatorNumber(array('required' => false)),
      'temperatura_recepcion'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'temperatura_almacenamiento' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'observaciones'              => new sfValidatorString(array('required' => false)),
      'created_at'                 => new sfValidatorDateTime(array('required' => false)),
      'updated_at'                 => new sfValidatorDateTime(array('required' => false)),
      'usuario_id'                 => new sfValidatorPropelChoice(array('model' => 'UserProfile', 'column' => 'id')),
      'muestreo_id'                => new sfValidatorPropelChoice(array('model' => 'Muestreo', 'column' => 'id')),
      'presentacion_id'            => new sfValidatorPropelChoice(array('model' => 'Presentacion', 'column' => 'id')),
      'norma_id'                   => new sfValidatorPropelChoice(array('model' => 'Norma', 'column' => 'id')),
      'cliente_id'                 => new sfValidatorPropelChoice(array('model' => 'Cliente', 'column' => 'id')),
      'tipo_muestra_id'            => new sfValidatorPropelChoice(array('model' => 'TipoMuestra', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('muestra[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Muestra';
  }


}
