<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mUser extends CI_Model
{
	protected $table;

	/**
	 * Constructeur du model
	 */
	public function __construct()
	{
		parent::__construct();
    $this->table = 't_utilisateur_uti';
	}

	/**
	*	AJOUT D'UN UTILISATEUR
	* @param string $login
	* @param string $mail
	* @param string $nom
	* @param string $prenom
	* @param string $password
	* @param string $avatar
	*/
	public function add($login, $mail, $nom, $prenom, $password, $avatar)
	{
		//Données échappées
		$this->db->set('UTI_LOGIN', $login);
		$this->db->set('UTI_MAIL', $mail);
		$this->db->set('UTI_NOM', $nom);
		$this->db->set('UTI_PRENOM', $prenom);
		$this->db->set('UTI_PASS', $password);
		$this->db->set('UTI_AVATAR', $avatar);

		//Insertion des donnés
		return $this->db->insert($this->table);
	}

	/**
	 * Récupère l'id, le login et de l'utilisateur et s'il est admin
   * retourne null si l'utilisateur n'existe pas
	 * @param string $login
   * @param string $password
	 */
	 public function find($login, $password)
	 {
		 $this->db->select('UTI_ID, UTI_LOGIN, UTI_ADMIN');
		 $query = $this->db->get_where($this->table, array('UTI_LOGIN' => $login, 'UTI_PASS' => $password));

		 if( $query->num_rows() > 0 )
       return $query->result();
		 else
		 	return null;
	 }
}
