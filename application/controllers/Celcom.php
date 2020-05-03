<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Celcom extends CI_Controller {

    //Afffiche la contenu principale du compte de tous agent
    public function index() {
        $this->load->helper('html');
        $this->load->helper('date');
        $this->load->model('listercommunique');
        $this->load->model('listerarticles');
        $this->load->model('demande_status');
        $this->load->model('article_status');
        $this->listerarticles->totalD($this->auth_user->is_connected);

        $this->listerarticles->demande($this->auth_user->is_connected);
       // $this->listercommunique->load($this->auth_user->is_connected);
        $this->listerarticles->valider($this->auth_user->is_connected);
        $this->listerarticles->nontraiter($this->auth_user->is_connected);
        $this->listerarticles->rejeter($this->auth_user->is_connected);
        $this->listerarticles->attente($this->auth_user->is_connected);
        $data['title'] = "Celcom";
        if ($this->auth_user->is_connected)
        {
        $this->load->view('blog/index', $data);
        }
        else {
          $this->load->view('site/connexion');
        }
        
      }
      
      public function accueil_communique() {
        $this->load->helper('html');
        $this->load->helper('date');
        $this->load->model('listercommunique');
        $categories= $this->listercommunique->viewAllCategories();
        $this->listercommunique->load($this->auth_user->is_connected);
        $data['title'] = "Celcom";
        if ($this->auth_user->is_connected)
        {
        $this->load->view('celcom/index_communique', ['data' => $data, 'categories' => $categories]);
        }
        else {
          $this->load->view('site/connexion');
        }
        
      }


      //Fonction  qui permet l'affichage  d'un communique par son id cad affichage des details de l'article
  public function communique($id = NULL) {
    if (!is_numeric($id)) {
      redirect('blog/index');
    }
    $this->load->helper('html');
    $this->load->helper('date');
    $this->load->model('communique');
    $this->communique->load($id, $this->auth_user->is_connected);
    if ($this->communique->is_found) {
      $data['title'] = htmlentities($this->communique->title);
      $data['script'] = '<script src="' . base_url('js/article.js') . '"></script>';
      
      $this->load->view('celcom/communique_details', $data);
      
    } else {
      redirect('blog/index');
    }
  }
      
      /* Affiche les articles validés en chargeant le modèle load_article_id
      public function article_valide($id = NULL) {
        if (!is_numeric($id)) {
          redirect('blog/index');
        }
        $this->load->helper('html');
        $this->load->helper('date');
        $this->load->model('article');
        $this->load->model('article_status');
        $this->article->load_article_id($id, $this->auth_user->is_connected);
        if ($this->article->is_found) {
          $data['title'] = htmlentities($this->article->title);
          $data['script'] = '<script src="' . base_url('js/article.js') . '"></script>';
          
          $this->load->view('blog/index_article_valide_details', $data);
          
        } else {
          redirect('blog/index');
        }
      }
      */

      
      // permet d'ajouter ou d'éditer un communiqué
      public function edition($id = NULL) {
        if (!$this->auth_user->is_connected) {
          redirect('blog/index');
        }
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('communique');
        if ($id !== NULL) {
          if (is_numeric($id)) {
            $this->communique->load($id, TRUE);
            if (!$this->communique->is_found) {
              redirect('blog/index');
            }
          } else {
            redirect('celcom/index');
          }
          $data['title'] = "Modification article";
        } else {
          $data['title'] = "Nouvel article";
          $this->communique->author_id = $this->auth_user->id;
        }
        $this->set_blog_post_validation();
        if ($this->form_validation->run() == TRUE) {
          $this->communique->content = $this->input->post('content');
          $this->communique->title = $this->input->post('title');
          $this->communique->save();
          if ($this->communique->is_found) {
            redirect('blog/' . $this->communique->alias . '_' . $this->communique->id);
          }
        }
        
        $this->load->view('celcom/ajout_communique', $data);
        
      }

      protected function set_blog_post_validation() {
        $this->form_validation->set_rules('title', 'Titre', 'required|max_length[64]');
        $this->form_validation->set_rules('content', 'Contenu', 'required');
         
        }


        public function viewCommuniqueCategories($categorie_id)
        {
                $this->load->model('listercommunique');
                $this->load->helper('html');
                $communiques = $this->listercommunique->getCategorie($categorie_id);
                //$data['title'] = htmlentities($communiques->title);
                $data['script'] = '<script src="' . base_url('js/article.js') . '"></script>';
                $categories = $this->listercommunique->viewAllCategories();
                $this->load->view('celcom/viewCommuniqueCategories', ['communiques' => $communiques ,'categories' => $categories,'data' => $data]);
                
        }
    

}