<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mIngredients extends CI_Model
{
	//protected $table = 't_ingredient_igd';

	/**
	 * Constructeur du model
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Récupère un ingrédient d'une recette
	 * dont l'id est passé en paramètre
	 */
	 public function find($id)
	 {
     $this->db->select('t_ingredient_igd.IGD_LABEL, UTI_LOGIN');
     $this->db->from('t_ingredient_igd');
		 $this->db->join('tj_igd_rct_uni', 't_ingredient_igd.IGD_LABEL = tj_igd_rct_uni.IGD_LABEL');
		 $this->db->join('t_utilisateur_uti', 't_ingredient_igd.UTI_ID = t_utilisateur_uti.UTI_ID');
		 $this->db->where('RCT_ID', $id);
		 $query = $this->db->get();

		 if( $query->num_rows > 0 )
		 {
			 $categorie = $query->result();
			 return $categorie[0];
		 }
		 else
		 	return null;
	 }

	 /**
		* Retourne une liste de touts les ingrédients d'une recette
    * dont l'id est passé en paramètre
		*/
	 public function get_all($id)
	 {
     $this->db->select('t_ingredient_igd.IGD_LABEL');
     $this->db->from('t_ingredient_igd');
		 $this->db->join('tj_igd_rct_uni', 't_ingredient_igd.IGD_LABEL = tj_igd_rct_uni.IGD_LABEL');
		 $this->db->where('RCT_ID', $id);
		 $query = $this->db->get();

		 if( $query->num_rows() > 0 )
		 	return $query->result();
		 else
		 	return array();
	 }
}
