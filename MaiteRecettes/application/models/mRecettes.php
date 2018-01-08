<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mRecettes extends CI_Model
{
	protected $table;

	/**
	 * Constructeur du model
	 */
	public function __construct()
	{
		parent::__construct();
		$this->table = 't_recette_rct';
	}

	/**
	 * Récupère une recette d'une catégorie
	 * dont l'id est passé en paramètre
	 */
	 public function find($cat_id)
	 {
		 $this->db->select('t_recette_rct.RCT_ID, RCT_TITRE, RCT_DESCRIPTION, RCT_ILLUSTRATION, UTI_LOGIN');
		 $this->db->from($this->table);
		 $this->db->join('tj_cat_rct', 't_recette_rct.RCT_ID = tj_cat_rct.RCT_ID');
		  $this->db->join('t_utilisateur_uti', 't_recette_rct.UTI_ID = t_utilisateur_uti.UTI_ID');
		 $this->db->where('CAT_ID', $cat_id);
		 $query = $this->db->get();

		 if( $query->num_rows() > 0 )
		 {
			 $recette = $query->result();
			 return $recette[0];
		 }
		 else
		 	return null;
	 }

	 /**
		* Retourne une liste de toutes les recettes
		* d'une catégorie dont l'id est passé en paramètre
		*/
	 public function get_all($cat_id)
	 {
		 $this->db->select('t_recette_rct.RCT_ID, RCT_TITRE, RCT_DESCRIPTION, RCT_ILLUSTRATION, UTI_LOGIN');
		 $this->db->from($this->table);
		 $this->db->join('tj_cat_rct', 't_recette_rct.RCT_ID = tj_cat_rct.RCT_ID');
		 $this->db->join('t_utilisateur_uti', 't_recette_rct.UTI_ID = t_utilisateur_uti.UTI_ID');
		 $this->db->where('CAT_ID', $cat_id);
		 $query = $this->db->get();

		 if( $query->num_rows() > 0 )
		 	return $query->result();
		 else
		 	return array();
	 }


	 /**
	 * NOMBRE DE RECETTES
	 * retourne le nombre total de recettes
	 */
	 public function count()
	 {
		 $this->db->select('RCT_TITRE');
		 $query = $this->db->get($this->table);

		 if($query->num_rows() > 0)
		 	return $query->num_rows();
		 else
		 	return array();
	 }
}
