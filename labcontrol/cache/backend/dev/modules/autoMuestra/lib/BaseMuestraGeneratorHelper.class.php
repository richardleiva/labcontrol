<?php

/**
 * muestra module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage muestra
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseMuestraGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'muestra' : 'muestra_'.$action;
  }
}
