<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListerArticles extends CI_Model {

    protected $_list;
    protected $_listbrouillon;
    protected $_listNonSoumis;
    protected $_listSoumis;
    protected $_nt;
    protected $_listattente;
    protected $_listvalide;
    protected $_listrejete;
    protected $_listattenteAg;
    protected $_listvalideAg;
    protected $_listrejeteAg;
    protected $_totalArticle;
    protected $_totalDemande;
    
    

    public function __construct() {
        parent::__construct();
        $this->_list = [];
        $this->_listbrouillon = [];
        $this->_listNonSoumis = [];
        $this->_listSoumis = [];
        $this->_nt = [];
        $this->_listattente = [];
        $this->_listvalide = [];
        $this->_listrejete = [];
        $this->_listattenteAg = [];
        $this->_listvalideAg = [];
        $this->_listrejeteAg = [];
        $this->_totalArticle = [];
        $this->_totalDemande = [];
    }

    public function __get($key) {
        $method_name = 'get_property_' . $key;
        if (method_exists($this, $method_name)) {
            return $this->$method_name();
        } else {
            return parent::__get($key);
        }
    }
        //verifie s'il y'a article ou pas
    protected function get_property_has_items() {
        return count($this->_list) > 0;
    }

    protected function get_property_has_itemsTotal() {
        return count($this->_totalArticle) > 0;
    }

    protected function get_property_has_itemsDemande() {
        return count($this->_totalDemande) > 0;
    }

    protected function get_property_has_itemsattente() {
        return count($this->_listattente) > 0;
    }

    protected function get_property_has_itemsattenteAg() {
        return count($this->_listattenteAg) > 0;
    }

    protected function get_property_has_itemsvalide() {
        return count($this->_listvalide) > 0;
    }
    
    protected function get_property_has_itemsvalideAg() {
        return count($this->_listvalideAg) > 0;
    }
    
    protected function get_property_has_itemsrejete() {
        return count($this->_listrejete) > 0;
    }

    protected function get_property_has_itemsrejeteAg() {
        return count($this->_listrejeteAg) > 0;
    }


    
        //verifie s'il y'a article ou pas

        protected function get_property_itemsTotal() {
            return $this->_totalArticle;
        }

        protected function get_property_itemsDemande() {
            return $this->_totalDemande;
        }

        protected function get_property_has_itemsbrouillon() {
            return count($this->_listbrouillon) > 0;
        }

         //verifie s'il y'a article ou pas
         protected function get_property_has_itemsNonSoumis() {
            return count($this->_listNonSoumis) > 0;
        }

        protected function get_property_has_itemsSoumis() {
            return count($this->_listSoumis) > 0;
        }

        protected function get_property_has_itemsnt() {
            return count($this->_nt) > 0;
        }

        protected function get_property_itemsattente() {
            return $this->_listattente;
        }

        protected function get_property_itemsattenteAg() {
            return $this->_listattenteAg;
        }

        protected function get_property_itemsvalide() {
            return $this->_listvalide;
        }

        protected function get_property_itemsvalideAg() {
            return $this->_listvalideAg;
        }

        protected function get_property_itemsrejete() {
            return $this->_listrejete;
        }

        protected function get_property_itemsrejeteAg() {
            return $this->_listrejeteAg;
        }

    //retourne la liste des articles
    protected function get_property_items() {
        return $this->_list;
    }

    //retourne la liste des articles "brouillon"
    protected function get_property_itemsbrouillon() {
        return $this->_listbrouillon;
    }


    protected function get_property_itemsNonSoumis() {
        return $this->_listNonSoumis;
    }

    protected function get_property_itemsSoumis() {
        return $this->_listSoumis;
    }

    protected function get_property_itemsnt() {
        return $this->_nt;
    }

    //le nombre d'articles
    protected function get_property_num_items() {
        return count($this->_list);
    }

    
    protected function get_property_num_itemsTotal() {
        return count($this->_totalArticle);
    }

    protected function get_property_num_itemsDemande() {
        return count($this->_totalDemande);
    }

    protected function get_property_num_itemsbrouillon() {
        return count($this->_listbrouillon);
    }

    protected function get_property_num_itemsNonSoumis() {
        return count($this->_listNonSoumis);
    }

    protected function get_property_num_itemsSoumis() {
        return count($this->_listSoumis);
    }

    protected function get_property_num_itemsnt() {
        return count($this->_nt);
    }

    protected function get_property_num_itemsattente() {
        return count($this->_listattente);
    }

    protected function get_property_num_itemsattenteAg() {
        return count($this->_listattenteAg);
    }

    protected function get_property_num_itemsvalide() {
        return count($this->_listvalide);
    }

    protected function get_property_num_itemsvalideAg() {
        return count($this->_listvalideAg);
    }

    protected function get_property_num_itemsrejete() {
        return count($this->_listrejete);
    }

    protected function get_property_num_itemsrejeteAg() {
        return count($this->_listrejeteAg);
    }



    //Charger tous les articles
    public function load($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);
                 $names = array('N', 'B');
                 $this->db->where_in('status', $names);
                 

        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_list = $this->db->get()-> result();
    }


    public function total($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);
                 

        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_totalArticle = $this->db->get()-> result();
    }

    public function totalD($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $names = array('R', 'V', 'A','S');
                 $this->db->where_in('status', $names);

        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_totalDemande = $this->db->get()-> result();
    }



    public function article_public($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('status', 'V');
                 

        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_list = $this->db->get()-> result();
    }



    
    public function demande($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 //$names = array('R', 'V', 'A','S');
                 $this->db->where('status', 'S');
                 

        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_list = $this->db->get()-> result();
    }
    



    //Charger les articles brouillons
    public function brouillon($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);
                 $this->db->where('status', 'B');
        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_listbrouillon = $this->db->get()-> result();
    }


    public function NonSoumis($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);
                 $names = array('N', 'B');
                 $this->db->where_in('status', $names);
        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_listNonSoumis = $this->db->get()-> result();
    }

    public function Soumis($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);
                 $names = array('V', 'R', 'A','S');
                 $this->db->where_in('status', $names);
        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_listSoumis = $this->db->get()-> result();
    }


    public function nontraiter($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('status', 'S');
        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_nt = $this->db->get()-> result();
    }


    public function valider($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('status', 'V');
        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_listvalide = $this->db->get()-> result();
    }

    public function rejeter($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('status', 'R');
        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_listrejete = $this->db->get()-> result();
    }

    public function attente($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('status', 'A');
        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_listattente = $this->db->get()-> result();
    }


    public function validerAg($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);
                 $this->db->where('status', 'V');
        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_listvalideAg = $this->db->get()-> result();
    }

    public function rejeterAg($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);
                 $this->db->where('status', 'R');
        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_listrejeteAg = $this->db->get()-> result();
    }

    public function attenteAg($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);
                 $this->db->where('status', 'A');
        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_listattenteAg = $this->db->get()-> result();
    }




}