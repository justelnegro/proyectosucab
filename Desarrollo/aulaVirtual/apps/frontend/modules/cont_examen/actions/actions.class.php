<?php

/**
 * cont_examen actions.
 *
 * @package    aulaVirtual
 * @subpackage cont_examen
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class cont_examenActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->evaluacion = EvaluacionPeer::retrieveByPk($request->getParameter('idevaluacion'));
    $this->contenido_examen_list = ContenidoExamenPeer::doSelect(new Criteria());
    $this->respuesta_list= RespuestaPeer::doSelect(new Criteria());
    
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ContenidoExamenForm();
    $this->evaluacion = EvaluacionPeer::retrieveByPk($request->getParameter('idevaluacion'));
  }

  public function executeEvaluacion(sfWebRequest $request)
  {
    $_SESSION["evaluacion"]=null;
    $_SESSION["pregunta"]=null;
    $_SESSION["flag"]=null;
    $this->evaluacion_list = EvaluacionPeer::getExamenVirtual();
  }

//    public function executeShow(sfWebRequest $request)
//  {
//    $this->contenido_examen_list = ContenidoExamenPeer::getPreguntasSegunExamen($request->getParameter('idevaluacion'));
//
//    $this->forward404Unless($this->contenido_examen);
//  }


  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new ContenidoExamenForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($contenido_examen = ContenidoExamenPeer::retrieveByPk($request->getParameter('idpregunta'),
            $request->getParameter('idevaluacion')), sprintf('Object contenido_examen does not exist (%s).', $request->getParameter('idpregunta'),
            $request->getParameter('idevaluacion')));
    $this->form = new ContenidoExamenForm($contenido_examen);
    $this->evaluacion = EvaluacionPeer::retrieveByPk($request->getParameter('idevaluacion'));
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($contenido_examen = ContenidoExamenPeer::retrieveByPk($request->getParameter('idpregunta'),
            $request->getParameter('idevaluacion')), sprintf('Object contenido_examen does not exist (%s).', $request->getParameter('idpregunta'),
            $request->getParameter('idevaluacion')));
    $this->form = new ContenidoExamenForm($contenido_examen);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($contenido_examen = ContenidoExamenPeer::retrieveByPk($request->getParameter('idpregunta'),
            $request->getParameter('idevaluacion')), sprintf('Object contenido_examen does not exist (%s).', $request->getParameter('idpregunta'),
            $request->getParameter('idevaluacion')));
    $contenido_examen->delete();

    $this->redirect('cont_examen/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $contenido_examen = $form->save();
      $_SESSION["pregunta"]=$contenido_examen->getIdpregunta();
      $this->redirect('resp/new?idpregunta='.$contenido_examen->getIdpregunta());
    }
  }
}
