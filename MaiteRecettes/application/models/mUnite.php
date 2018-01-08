<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mUnite extends CI_Model
{
	//protected $table = 't_recette_rct';

	/**
	 * Constructeur du model
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Récupère les détails unitaires d'une recette
	 * dont l'id est passé en paramètre
	 */
	 public function find($id)
	 {
		 $this->db->select('RCT_TITRE, RCT_TEMPS_PREPARATION, RCT_TEMPS_CUISSON, RCT_DIFFICULTE, RCT_COUT, RCT_NBPERSONNE');
		 $query = $this->db->get_where('t_recette_rct', array('RCT_ID' => $id));

		 if( $query->num_rows() > 0 )
      return $query->result();
		 else
		 	return array();
	 }
 }
