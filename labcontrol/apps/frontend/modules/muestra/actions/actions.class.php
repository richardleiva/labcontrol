<?php

/**
 * muestra actions.
 *
 * @package    labcontrol
 * @subpackage muestra
 * @author     Your name here
 */
class muestraActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Muestras = MuestraPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Muestra = MuestraPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Muestra);
  }  
  
  public function executeGetNumeroMuestras(sfWebRequest $request)
  {
    $c = new Criteria(); // me permite crear consultas a una base de datos. Gracias al criteria funcionara para todo tipo de base de datos MYSQL, ETC
		$c->add(MuestraPeer::ID);
		return MuestraPeer::doSelect($c);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MuestraForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MuestraForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Muestra = MuestraPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Muestra does not exist (%s).', $request->getParameter('id')));
    $this->form = new MuestraForm($Muestra);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Muestra = MuestraPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Muestra does not exist (%s).', $request->getParameter('id')));
    $this->form = new MuestraForm($Muestra);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Muestra = MuestraPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Muestra does not exist (%s).', $request->getParameter('id')));
    $Muestra->delete();

    $this->redirect('muestra/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Muestra = $form->save();

      $this->redirect('muestra/edit?id='.$Muestra->getId());
    }
  } 
 }
?>
