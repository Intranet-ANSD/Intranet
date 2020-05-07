<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Celcom extends CI_Controller {

  public function __construct()
       {
            parent::__construct();
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
        $this->listercommunique->load($this->auth_user->is_connected); 
        $this->load->model('communique');
  
       }

    //Afffiche la contenu principale du compte de tous agent
    public function index() {
        
        $this->listercommunique->load($this->auth_user->is_connected);
        $data['title'] = "Page d'accueil Celcom";
        if ($this->auth_user->is_connected)
        {
        $this->load->view('blog/index', $data);
        }
        else {
          $this->load->view('site/connexion');
        }
        
      }


      public function listecommunique() {
        
        $this->listercommunique->load($this->auth_user->is_connected);
        $data['title'] = "Liste des  communiqués";
        if ($this->auth_user->is_connected)
        {
        $this->load->view('blog/index_liste_communique', $data);
        }
        else {
          $this->load->view('site/connexion');
        }
        
      }
      
      public function accueil_communique() {
        
        $categories= $this->listercommunique->viewAllCategories();
        $this->listercommunique->load($this->auth_user->is_connected);
        
        if ($this->auth_user->is_connected)
        {
        $data['title'] = "Liste des publications";
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
        $categories = $this->listercommunique->getCategories();
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
          $this->set_blog_post_validation();
        if ($this->form_validation->run() == TRUE) {
          $this->communique->content = $this->input->post('content');
          $this->communique->title = $this->input->post('title');
          $this->communique->save();
          if ($this->communique->is_found) {
            redirect('blog/' . $this->communique->alias . '_' . $this->communique->id);
          }
        }
        
        $this->load->view('celcom/modifier_communique', ['data' => $data , 'categories' => $categories]);
        
        } else {
          $data['title'] = "Nouvel article";
          $this->communique->author_id = $this->auth_user->id;
          $this->set_blog_post_validation();
        if ($this->form_validation->run() == TRUE) {
          $this->communique->content = $this->input->post('content');
          $this->communique->title = $this->input->post('title');
          $this->communique->save();
          if ($this->communique->is_found) {
            redirect('blog/' . $this->communique->alias . '_' . $this->communique->id);
          }
        }
        
        $this->load->view('celcom/ajout_communique', ['data' => $data , 'categories' => $categories]);
        
        }
        
      }

      protected function set_blog_post_validation() {
        $this->form_validation->set_rules('title', 'Titre', 'required|max_length[64]');
        $this->form_validation->set_rules('content', 'Contenu', 'required');
        $this->form_validation->set_rules('categorie_id', 'Categorie', 'required');
         
        }


        public function viewCommuniqueCategories($categorie_id)
        {
                $this->load->helper('html');
                $communiques = $this->listercommunique->getCategorie($categorie_id);
                //$data['title'] = htmlentities($communiques->title);
                $data['script'] = '<script src="' . base_url('js/article.js') . '"></script>';
                $categories = $this->listercommunique->viewAllCategories();
                $this->load->view('celcom/index_communique_categories', ['communiques' => $communiques ,'categories' => $categories,'data' => $data]);
                
        }


        public function listevalideCelcom() {
          
          //les fonctions appelées ici sont décrites dans le modele.Consulter le modele pour avoir plus d'informations
          
          $this->listerarticles->article_public($this->auth_user->is_connected);
          $data['title'] = "Liste des articles validés par la celcom";
          if ($this->auth_user->is_connected)
          {
          $this->load->view('blog/index_valide_celcom', $data);
          }
          else {
            $this->load->view('site/connexion');
          }
          
        }
      
        public function listeAttenteCelcom() {
          
          $data['title'] = "Liste des articles mis en attentes par la celcom";
          if ($this->auth_user->is_connected)
          {
          $this->load->view('blog/index_attente_celcom', $data);
          }
          else {
            $this->load->view('site/connexion');
          }
          
        }
      
        public function listeRejetCelcom() {
          
          
          $data['title'] = "Liste des articles rejetés par la celcom";
          if ($this->auth_user->is_connected)
          {
          $this->load->view('blog/index_rejet_celcom', $data);
          }
          else {
            $this->load->view('site/connexion');
          }
          
        }
      
    

}