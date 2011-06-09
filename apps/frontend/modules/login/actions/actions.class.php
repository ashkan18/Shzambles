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
    //$this->forward('default', 'module');
      
      $i = 3;
      echo $i;
      $i = $i + 3;
      $s = $i/3;
      
  }
  
  public function executeSubmit(sfWebRequest $request)
  {
      
  }
}
