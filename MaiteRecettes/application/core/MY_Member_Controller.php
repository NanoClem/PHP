<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MY_Member_Controller extends MY_CONTROLLER
{
  /**
  * CONSTRUCTEUR
  * si un utilisateur n'est pas connecté,
  * on le redirige vers la page d'accueil
  */
  public function __construct()
  {
    parent::__construct();
    $this->load->model('mUser');
  }

  /**
  *
  */
  public function index()
  {
    if( !($this->isLogOn()) )
      redirect( base_url(), 'refresh' );
  }
}
