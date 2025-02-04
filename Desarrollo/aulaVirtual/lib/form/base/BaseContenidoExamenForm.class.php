<?php

/**
 * ContenidoExamen form base class.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseContenidoExamenForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idpregunta'   => new sfWidgetFormInputHidden(),
      'pregunta'     => new sfWidgetFormInput(),
      'idevaluacion' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'idpregunta'   => new sfValidatorPropelChoice(array('model' => 'ContenidoExamen', 'column' => 'idpregunta', 'required' => false)),
      'pregunta'     => new sfValidatorString(array('max_length' => 100)),
      'idevaluacion' => new sfValidatorPropelChoice(array('model' => 'ContenidoExamen', 'column' => 'idevaluacion', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contenido_examen[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ContenidoExamen';
  }


}
