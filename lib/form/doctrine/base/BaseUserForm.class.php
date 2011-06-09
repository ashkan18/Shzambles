<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    shzambles-nbsf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'userid'   => new sfWidgetFormInputHidden(),
      'login'    => new sfWidgetFormTextarea(),
      'password' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'userid'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('userid')), 'empty_value' => $this->getObject()->get('userid'), 'required' => false)),
      'login'    => new sfValidatorString(),
      'password' => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}
