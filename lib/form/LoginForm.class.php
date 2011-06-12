<?php
  class LoginForm extends BaseForm
  {
    public function configure()
    {
      $this->setWidgets(array(
          'login' => new sfWidgetFormInputText(),
          'password' => new sfWidgetFormInputText(),
         
      ));
    }
    
  }
?>
