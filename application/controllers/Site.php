<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends My_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('site/connexion');
	}



	public function connexion() 
    {
        $this->load->helper("html");
        $this->load->helper("form");
        $this->load->library('form_validation');

        $data["title"] = "Identification";

        if($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->auth_user->login( $username, $password);
            if(($this->auth_user->is_connected && $this->session->auth_user['profil_nom'] == 'agent_simple')) {
                redirect('blog/index');
            } else if(($this->auth_user->is_connected && $this->session->auth_user['profil_nom'] == 'celcom')) {
                redirect('celcom/index');
            }
            else{
                $data['login_error'] = "Échec de l'authentification";
            }
        }

        $this->load->view('site/connexion', $data);
        
    }

	function deconnexion()
         {
        $this->auth_user->logout();
        redirect('connexion');
        }
	
}
