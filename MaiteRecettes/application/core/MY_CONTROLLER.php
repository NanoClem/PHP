<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MY_CONTROLLER extends CI_Controller
{
  public $user;

  /**
  * CONSTRUCTEUR DU CONTROLLEUR
  * récupère les informations de l'utilisateur connecté s'il est connecté dans $user
  * affecte NULL à user si aucun utilisateur n'est connecté
  */
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('mUser');

    if( $this->isLogOn() )
    {
      $this->user = array('id'        => $_SESSION['id'],
                          'pseudo'    => $_SESSION['pseudo'],
                          'admin'     => $_SESSION['admin'],
                          'logged_in' => $_SESSION['logged_in']);
    }
    else
      $this->user = NULL;
  }

  /**
  * SAVOIR SI UN UTILISATEUR EST CONNECTÉ
  * renvoie TRUE si connecté, FALSE sinon
  */
  public function isLogOn()
  {
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'])
      return TRUE;
    else
      return FALSE;
  }

  /**
  * SAVOIR SI L'UTILISATEUR CONNECTÉ EST ADMIN
  * renvoie TRUE si connecté + admin, FALSE sinon
  */
  public function isAdmin()
  {
    if( $this->isLogOn() )
    {
      if($this->$user['admin'] == 1)
        return TRUE;
      else
        return FALSE;
    }
    else
      return FALSE;
  }

  /**
  * CONNECTION DE L'UTILISATEUR
  * si les authentifiants de connexions existent dans la BDD, créé une session,
  * renseigne $user et redirige sur la page de profil.
  * Redirige sur la page de connexion sinon
  */
  public function connexion()
  {
    $this->form_validation->set_rules('login', '"Login"',
    'trim|required|max_length[25]|alpha_dash|encode_php_tags');

    $this->form_validation->set_rules('pwd', '"Mot de passe"',
    'trim|required|max_length[25]|encode_php_tags');


    if($this->form_validation->run())
    {
      $login_input = $this->input->post('login');
      $pwd_input = $this->input->post('pwd');
      $data = array();
      $data['user'] = $this->mUser->find($login_input, $pwd_input);

      if( isset($data['user']['0']->UTI_ID) )
      {
        $this->user = array('id'        => $data['user']['0']->UTI_ID,
                            'pseudo'    => $login_input,
                            'admin'     => $data['user']['0']->UTI_ADMIN,
                            'logged_in' => TRUE);

        session_start();
        $_SESSION['id'] = $data['user']['0']->UTI_ID;
        $_SESSION['pseudo'] = $login_input;
        $_SESSION['admin'] = $data['user']['0']->UTI_ADMIN;
        $_SESSION['logged_in'] = TRUE;

        $this->load->view('modules/profil', $data);
      }
    }
    else
      $this->load->view('modules/connexion');
  }

  /**
  * DÉCONNECTE UN UTILISATEUR AUTHENTIFIÉ
  * détruit les informations de connexion, de session et de $user
  * redirige vers la page d'accueil
  */
  public function deconnexion()
  {
    $_SESSION = array();
    $this->user = array();
    session_destroy();
    redirect( base_url() );
  }
}
