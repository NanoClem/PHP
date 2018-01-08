<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mCategorie extends CI_Model
{
	//protected $table = 't_categorie_cat';

	/**
	 * Constructeur du model
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Récupère une catégorie
	 * dont l'id est passé en paramètre
	 */
	 public function find($id)
	 {
     $this->db->select('CAT_ID, CAT_LABEL, CAT_DESCRIPTION, CAT_ILLUSTRATION');
		 $query = $this->db->get_where('t_categorie_cat', array('CAT_ID' => $id));

		 if( $query->num_rows > 0 )
		 {
			 $categorie = $query->result();
			 return $categorie[0];
		 }
		 else
		 	return null;
	 }

	 /**
		* Retourne une liste de toutes les catégories
		*/
	 public function get_all()
	 {
     $this->db->select('CAT_ID, CAT_LABEL, CAT_DESCRIPTION, CAT_ILLUSTRATION');
		 $query = $this->db->get('t_categorie_cat');

		 if( $query->num_rows() > 0 )
		 	return $query->result();
		 else
		 	return array();
	 }
}
