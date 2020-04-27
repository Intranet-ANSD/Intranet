<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Celcom extends CI_Controller {

    public function index() {
        $this->load->helper('html');
        $this->load->helper('date');
        $this->load->model('listercommunique');
        $this->load->model('listerarticles');
        $this->load->model('demande_status');
        $this->listerarticles->demande($this->auth_user->is_connected);
       // $this->listercommunique->load($this->auth_user->is_connected);
        $this->listerarticles->valider($this->auth_user->is_connected);
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
      /*
      pour communique
      public function index() {
        $this->load->helper('html');
        $this->load->helper('date');
        $this->load->model('listercommunique');
        $this->listercommunique->load($this->auth_user->is_connected);
        $data['title'] = "Celcom";
        if ($this->auth_user->is_connected)
        {
        $this->load->view('blog/index', $data);
        }
        else {
          $this->load->view('site/connexion');
        }
        
      }
      */

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
    

}