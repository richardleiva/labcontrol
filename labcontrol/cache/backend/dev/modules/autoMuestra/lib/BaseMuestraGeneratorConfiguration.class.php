<?php

/**
 * muestra module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage muestra
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMuestraGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%cliente%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Muestra List';
  }

  public function getEditTitle()
  {
    return 'Edit Muestra';
  }

  public function getNewTitle()
  {
    return 'New Muestra';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'cliente',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nombre_responsable' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fecha_recepcion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'fecha_entrega' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'hora_recepcion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'codigo_interno' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cantidad' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'temperatura_recepcion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'temperatura_almacenamiento' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'observaciones' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'usuario_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'muestreo_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'presentacion_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'norma_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'cliente_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'tipo_muestra_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'nombre_responsable' => array(),
      'fecha_recepcion' => array(),
      'fecha_entrega' => array(),
      'hora_recepcion' => array(),
      'codigo_interno' => array(),
      'cantidad' => array(),
      'temperatura_recepcion' => array(),
      'temperatura_almacenamiento' => array(),
      'observaciones' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'usuario_id' => array(),
      'muestreo_id' => array(),
      'presentacion_id' => array(),
      'norma_id' => array(),
      'cliente_id' => array(),
      'tipo_muestra_id' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'nombre_responsable' => array(),
      'fecha_recepcion' => array(),
      'fecha_entrega' => array(),
      'hora_recepcion' => array(),
      'codigo_interno' => array(),
      'cantidad' => array(),
      'temperatura_recepcion' => array(),
      'temperatura_almacenamiento' => array(),
      'observaciones' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'usuario_id' => array(),
      'muestreo_id' => array(),
      'presentacion_id' => array(),
      'norma_id' => array(),
      'cliente_id' => array(),
      'tipo_muestra_id' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'nombre_responsable' => array(),
      'fecha_recepcion' => array(),
      'fecha_entrega' => array(),
      'hora_recepcion' => array(),
      'codigo_interno' => array(),
      'cantidad' => array(),
      'temperatura_recepcion' => array(),
      'temperatura_almacenamiento' => array(),
      'observaciones' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'usuario_id' => array(),
      'muestreo_id' => array(),
      'presentacion_id' => array(),
      'norma_id' => array(),
      'cliente_id' => array(),
      'tipo_muestra_id' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'nombre_responsable' => array(),
      'fecha_recepcion' => array(),
      'fecha_entrega' => array(),
      'hora_recepcion' => array(),
      'codigo_interno' => array(),
      'cantidad' => array(),
      'temperatura_recepcion' => array(),
      'temperatura_almacenamiento' => array(),
      'observaciones' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'usuario_id' => array(),
      'muestreo_id' => array(),
      'presentacion_id' => array(),
      'norma_id' => array(),
      'cliente_id' => array(),
      'tipo_muestra_id' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'nombre_responsable' => array(),
      'fecha_recepcion' => array(),
      'fecha_entrega' => array(),
      'hora_recepcion' => array(),
      'codigo_interno' => array(),
      'cantidad' => array(),
      'temperatura_recepcion' => array(),
      'temperatura_almacenamiento' => array(),
      'observaciones' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'usuario_id' => array(),
      'muestreo_id' => array(),
      'presentacion_id' => array(),
      'norma_id' => array(),
      'cliente_id' => array(),
      'tipo_muestra_id' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'MuestraForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'MuestraFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfPropelPager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getPeerMethod()
  {
    return 'doSelect';
  }

  public function getPeerCountMethod()
  {
    return 'doCount';
  }
}
