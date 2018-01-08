<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Recette extends CI_Controller
{
  /**
  * CONSTRUCTEUR DU CONTROLLEUR
  *
  */
  public function __construct()
  {
    parent::__construct();
  }

  /**
  * METHODE D'INDEX
  * indique la page à afficher si rien n'est précisé dans l'url
  * ici on redirige vers la page des catégories
  */
  public function index()
  {
    $this->categorie();
  }

  /**
  * METHODE D'AFFICHAGE DES CATÉGORIES
  * affiche les catégories de recettes avec les données récupérées
  * depuis le model mCategorie
  */
  public function categorie()
  {
    $this->load->model('mCategorie');
    $data = array();
    $data['categorie'] = $this->mCategorie->get_all();
    $this->load->view('modules/recette_liste', $data);
  }

  /**
  * METHODE D'AFFICHAGE DES RECETTES
  * affiche les recettes d'une catégorie avec les données récupérées
  * depuis le model mRecettes
  * @param int $cat_id : identifiant de catégorie
  */
  public function recettes($cat_id)
  {
    $this->load->model('mRecettes');
    $data = array();
    $data['recettes'] = $this->mRecettes->get_all($cat_id);
    $this->load->view('modules/recette', $data);
  }

  /**
  * METHODE D'AFFICHAGE DES DÉTAILS D'UNE RECETTE
  * affiche les détails d'une recette en récupérant ses ingrédients
  * aisni que ses informations temporelles et numériques (tmps prépa, nb personnes...)
  * depuis les modèles mIngredients et mUnite
  * @param int $rct_id : identifiant de recette
  */
  public function details($rct_id)
  {
    $this->load->model('mIngredients');
    $this->load->model('mUnite');
    $data = array();
    $data['ingredients'] = $this->mIngredients->get_all($rct_id);
    $data['unites'] = $this->mUnite->find($rct_id);
    $this->load->view('modules/recette_detail', $data);
  }
}
