<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MY_Member_Controller extends MY_CONTROLLER
{
  /**
  * CONSTRUCTEUR
  * si un utilisateur n'est pas connecté et qu'il n'est pas admin,
  * on le redirige vers la page d'accueil
  */
  public function __construct()
  {
    parent::__construct();

    if( !($this->isLogOn()) )
      redirect('base_url()');
    else
      if( !($this->isAdmin()) )
        redirect('base_url()');
  }
}
