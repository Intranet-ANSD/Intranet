<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publique extends CI_Controller {
  public function __construct()
       {
            parent::__construct();
        $this->load->helper('html');
        $this->load->helper('date');
        $this->load->helper('form');
        $this->load->model('listercommunique');
        $this->load->model('listerarticles');
        $this->load->model('demande_status');
        $this->load->model('article_status');
          $this->listerarticles->total($this->auth_user->is_connected);
          $this->listerarticles->brouillon($this->auth_user->is_connected);
          $this->listerarticles->NonSoumis($this->auth_user->is_connected);
          $this->listerarticles->Soumis($this->auth_user->is_connected);
          $this->listerarticles->valider($this->auth_user->is_connected);
          $this->listerarticles->attente($this->auth_user->is_connected);
          $this->listerarticles->rejeter($this->auth_user->is_connected);
          $this->listerarticles->validerAg($this->auth_user->is_connected);
          $this->listerarticles->attenteAg($this->auth_user->is_connected);
          $this->listerarticles->rejeterAg($this->auth_user->is_connected);
          $this->listerarticles->load($this->auth_user->is_connected);
          $this->listerarticles->lessoumis($this->auth_user->is_connected);
          $this->listerarticles->lesvalides($this->auth_user->is_connected);
          $this->listerarticles->lesrejets($this->auth_user->is_connected);
          $this->listerarticles->lesattentes($this->auth_user->is_connected);


      }
  //Afffiche la contenu principale du compte de tous agent
  public function index() {

        
  }

  public function articlePublic() {
    
    $this->listerarticles->article_public($this->auth_user->is_connected);
    $data['title'] = "Articles publié";
    if ($this->auth_user->is_connected)
    {
    $this->load->view('blog/intranet', $data);
    }
    else {
      $this->load->view('site/connexion');
    }
    
  }

  //Fonction  qui permet l'affichage  d'un article par son id cad affichage des details de l'article
  public function article($id = NULL) {
    if (!is_numeric($id)) {
      redirect('blog/index');
    }
    
    $this->load->model('article');
    
    $this->article->load($id, $this->auth_user->is_connected);
    if ($this->article->is_found) {
      $data['title'] = htmlentities($this->article->title);
      $data['script'] = '<script src="' . base_url('js/article.js') . '"></script>';
      
      $this->load->view('blog/index_article_details_public', $data);
      
    } else {
      redirect('blog/index');
    }
  }

  


}