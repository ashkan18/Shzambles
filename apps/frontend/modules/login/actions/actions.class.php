<?php

/**
 * login actions.
 *
 * @package    shzambles-nbsf
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      //$this->selectedMenuItem = "login";
      $this->getContext()->getRequest()->setAttribute('selectedMenuItem', 'login');
      
      $this->form = new LoginForm();

  }
  
  public function executeSubmit(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));
    
    $this->result = "success";
    
    
  }
  
  public function executeDisks($request)
  {
      //$this->selectedMenuItem = "disks";
       $this->getContext()->getRequest()->setAttribute('selectedMenuItem', 'disks');
  }
}
