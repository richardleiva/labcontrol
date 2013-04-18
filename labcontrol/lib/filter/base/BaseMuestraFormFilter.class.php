<?php

/**
 * Muestra filter form base class.
 *
 * @package    labcontrol
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseMuestraFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_responsable'         => new sfWidgetFormFilterInput(),
      'fecha_recepcion'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_entrega'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'hora_recepcion'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'codigo_interno'             => new sfWidgetFormFilterInput(),
      'cantidad'                   => new sfWidgetFormFilterInput(),
      'temperatura_recepcion'      => new sfWidgetFormFilterInput(),
      'temperatura_almacenamiento' => new sfWidgetFormFilterInput(),
      'observaciones'              => new sfWidgetFormFilterInput(),
      'created_at'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'usuario_id'                 => new sfWidgetFormPropelChoice(array('model' => 'UserProfile', 'add_empty' => true)),
      'muestreo_id'                => new sfWidgetFormPropelChoice(array('model' => 'Muestreo', 'add_empty' => true)),
      'presentacion_id'            => new sfWidgetFormPropelChoice(array('model' => 'Presentacion', 'add_empty' => true)),
      'norma_id'                   => new sfWidgetFormPropelChoice(array('model' => 'Norma', 'add_empty' => true)),
      'cliente_id'                 => new sfWidgetFormPropelChoice(array('model' => 'Cliente', 'add_empty' => true)),
      'tipo_muestra_id'            => new sfWidgetFormPropelChoice(array('model' => 'TipoMuestra', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre_responsable'         => new sfValidatorPass(array('required' => false)),
      'fecha_recepcion'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_entrega'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'hora_recepcion'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'codigo_interno'             => new sfValidatorPass(array('required' => false)),
      'cantidad'                   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'temperatura_recepcion'      => new sfValidatorPass(array('required' => false)),
      'temperatura_almacenamiento' => new sfValidatorPass(array('required' => false)),
      'observaciones'              => new sfValidatorPass(array('required' => false)),
      'created_at'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'usuario_id'                 => new sfValidatorPropelChoice(array('required' => false, 'model' => 'UserProfile', 'column' => 'id')),
      'muestreo_id'                => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Muestreo', 'column' => 'id')),
      'presentacion_id'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Presentacion', 'column' => 'id')),
      'norma_id'                   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Norma', 'column' => 'id')),
      'cliente_id'                 => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Cliente', 'column' => 'id')),
      'tipo_muestra_id'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoMuestra', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('muestra_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Muestra';
  }

  public function getFields()
  {
    return array(
      'id'                         => 'Number',
      'nombre_responsable'         => 'Text',
      'fecha_recepcion'            => 'Date',
      'fecha_entrega'              => 'Date',
      'hora_recepcion'             => 'Date',
      'codigo_interno'             => 'Text',
      'cantidad'                   => 'Number',
      'temperatura_recepcion'      => 'Text',
      'temperatura_almacenamiento' => 'Text',
      'observaciones'              => 'Text',
      'created_at'                 => 'Date',
      'updated_at'                 => 'Date',
      'usuario_id'                 => 'ForeignKey',
      'muestreo_id'                => 'ForeignKey',
      'presentacion_id'            => 'ForeignKey',
      'norma_id'                   => 'ForeignKey',
      'cliente_id'                 => 'ForeignKey',
      'tipo_muestra_id'            => 'ForeignKey',
    );
  }
}
