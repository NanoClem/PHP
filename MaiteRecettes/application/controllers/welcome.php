<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include 'application/third_party/Smarty/Smarty.class.php';

class Welcome extends CI_Controller
{
/**
 * CONSTRUCTEUR DU CONTROLLEUR
 * On initialise les éléments que l'on veut traiter/afficher de base
 * sur les pages web
 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mRecettes');
	}

/**
 * FONCTION INDEX
 * Affiche une page web de base si rien n'est spécifié
 * dans l'url
 * Ici on est redirigé vers la page d'accueil
 */
	public function index()
	{
		$this->accueil();
	}


	/**
	*
	*/
	public function accueil()
	{
		$data = array();

		$rand_cat = array('1' => random_int(1, 3),
										  '2' => random_int(1, 3),
										  '3' => random_int(1, 3));

		$temp = array('rct1' => $this->mRecettes->find($rand_cat['1']),
									'rct2' => $this->mRecettes->find($rand_cat['2']),
								  'rct3' => $this->mRecettes->find($rand_cat['3']));

		$data['rand_rct'] = $temp;
		$this->load->view('modules/accueil', $data);
	}
}
