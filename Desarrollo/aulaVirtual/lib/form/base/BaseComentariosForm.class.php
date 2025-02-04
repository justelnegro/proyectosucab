<?php

/**
 * Comentarios form base class.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseComentariosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcomentarios' => new sfWidgetFormInputHidden(),
      'comentario'    => new sfWidgetFormTextarea(),
      'created_at'    => new sfWidgetFormDate(),
      'updated_at'    => new sfWidgetFormDate(),
      'idpersona'     => new sfWidgetFormInput(),
      'idtema'        => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'idcomentarios' => new sfValidatorPropelChoice(array('model' => 'Comentarios', 'column' => 'idcomentarios', 'required' => false)),
      'comentario'    => new sfValidatorString(array('max_length' => 3000)),
      'created_at'    => new sfValidatorDate(),
      'updated_at'    => new sfValidatorDate(array('required' => false)),
      'idpersona'     => new sfValidatorInteger(),
      'idtema'        => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('comentarios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comentarios';
  }


}
