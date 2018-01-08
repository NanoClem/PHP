<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include 'application/core/MY_Member_Controller.php';

class Membre extends MY_Member_Controller
{
  /**
  * CONSTRUCTEUR
  */
  public function __construct()
  {
    parent::__construct();
  }

  /**
  * INSCRIPTION UTILISATEUR
  * l'utilisateur peut s'incrire via un formulaire
  * afin de pouvoir s'authentifier
  */
  public function inscription()
  {
    if( $this->isLogOn() )
      redirect(base_url('/membre/profil'));
    else
    {
      $this->form_validation->set_rules('login', '"Login"',
      'is_unique[t_utilisateur_uti.UTI_LOGIN]|trim|required|max_length[25]|alpha_dash|encode_php_tags');

      $this->form_validation->set_rules('mail', '"Mail"',
      'valid_email|trim|required|max_length[32]|encode_php_tags');

      $this->form_validation->set_rules('nom', '"Nom"',
      'trim|required|max_length[25]|encode_php_tags');

      $this->form_validation->set_rules('prenom', '"Prenom"',
      'trim|required|max_length[25]|encode_php_tags');

      $this->form_validation->set_rules('pwd', '"Password"',
      'trim|required|max_length[25]|encode_php_tags');

      $this->form_validation->set_rules('check_pwd', '"Check Password"',
      'matches[pwd]|trim|required|max_length[25]|encode_php_tags');

      $this->form_validation->set_rules('avatar', '"Avatar"',
      'required');

      if( $this->form_validation->run() )
      {
        //Récupération des entrées du formulaire d'inscription
        $inscr = array('login'  => $this->input->post('login'),
                       'mail'   => $this->input->post('mail'),
                       'nom'    => $this->input->post('nom'),
                       'prenom' => $this->input->post('prenom'),
                       'pwd'    => $this->input->post('pwd'),
                       'avatar' => $this->input->post('avatar')
                     );
        //Insertion de l'utilisateur dans la BDD
        $this->load->model('mUser');
        $this->mUser->add($inscr['login'], $inscr['mail'], $inscr['nom'], $inscr['prenom'], $inscr['pwd'], $inscr['avatar']);

        //Upload de l'avatar
        $this->do_upload($inscr['avatar']);
      }
      else
        $this->load->view('modules/inscription');
    }
  }

  /**
  * UPLOAD FILES
  * @param string $file : file name + extension
  */
  public function do_upload($file)
  {
    $config = array('upload_path'   => './asset/images/media/avatar/',
                    'allowed_types' => 'gif|png|jpg');
                    // 'max_size'      => '100',
                    // 'max_width'     => '160',
                    // 'max_heigth'    => '160');

    $this->load->library('upload', $config);

    if( !$this->upload->do_upload('avatar') )
    {
      $data = array();
      $data['error'] = $this->upload->display_errors();
      $this->load->view('modules/inscription', $data);
    }
    else
      $this->load->view('modules/connexion');
  }
}
