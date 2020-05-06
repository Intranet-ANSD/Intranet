<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListerArticles extends CI_Model {

    protected $_list;
    protected $_listv;
    protected $_listA;
    protected $_listR;
    protected $_listS;
    protected $_listbrouillon;
    protected $_listNonSoumis;
    protected $_listSoumis;
    protected $_nt;
    protected $_listattente;
    protected $_listvalide;
    protected $_listattentecelcom;
    protected $_listrejetecelcom;
    protected $_listrejete;
    protected $_listattenteAg;
    protected $_listvalideAg;
    protected $_listrejeteAg;
    protected $_totalArticle;
    protected $_totalDemande;
    
    

    public function __construct() {
        parent::__construct();
        $this->_list = [];
        $this->_listv = [];
        $this->_listA = [];
        $this->_listR = [];
        $this->_listS = [];
        $this->_listbrouillon = [];
        $this->_listNonSoumis = [];
        $this->_listSoumis = [];
        $this->_nt = [];
        $this->_listattente = [];
        $this->_listattentecelcom = [];
        $this->_listvalide = [];
        $this->_listrejete = [];
        $this->_listrejetecelcom = [];
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

    protected function get_property_has_itemsv() {
        return count($this->_listv) > 0;
    }

    protected function get_property_has_itemsA() {
        return count($this->_listA) > 0;
    }

    protected function get_property_has_itemsR() {
        return count($this->_listR) > 0;
    }

    protected function get_property_has_itemsS() {
        return count($this->_listS) > 0;
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

    protected function get_property_has_itemsattentecelcom() {
        return count($this->_listattentecelcom) > 0;
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

    protected function get_property_has_itemsrejetecelcom() {
        return count($this->_listrejetecelcom) > 0;
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

        protected function get_property_itemsattentecelcom() {
            return $this->_listattentecelcom;
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

        protected function get_property_itemsrejetecelcom() {
            return $this->_listrejetecelcom;
        }

        protected function get_property_itemsrejeteAg() {
            return $this->_listrejeteAg;
        }

    //retourne la liste des articles
    protected function get_property_items() {
        return $this->_list;
    }

    //retourne la liste des articles
    protected function get_property_itemsv() {
        return $this->_listv;
    }

    protected function get_property_itemsA() {
        return $this->_listA;
    }

    protected function get_property_itemsR() {
        return $this->_listR;
    }

    protected function get_property_itemsS() {
        return $this->_listS;
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

    protected function get_property_num_itemsv() {
        return count($this->_listv);
    }

    protected function get_property_num_itemsA() {
        return count($this->_listA);
    }

    protected function get_property_num_itemsR() {
        return count($this->_listR);
    }

    protected function get_property_num_itemsS() {
        return count($this->_listS);
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

    protected function get_property_num_itemsattentecelcom() {
        return count($this->_listattentecelcom);
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

    protected function get_property_num_itemsrejetecelcom() {
        return count($this->_listrejetecelcom);
    }

    protected function get_property_num_itemsrejeteAg() {
        return count($this->_listrejeteAg);
    }



    //Charger tous les articles
    public function load() {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);
                 $names = array('N', 'B');
                 $this->db->where_in('status', $names);
                 

        
        $this->_list = $this->db->get()-> result();
    }

    public function lesvalides() {
        $this->db->select("id, title, alias, content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);
                 $this->db->where('status', 'V');
                 

        
        $this->_listv = $this->db->get()-> result();
    }

    public function lesattentes() {
        $this->db->select("id, title, alias, content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);
                 $this->db->where('status', 'A');
                 

        
        $this->_listA = $this->db->get()-> result();
    }

    public function lesrejets() {
        $this->db->select("id, title, alias, content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);
                 $this->db->where('status', 'R');
                 

        
        $this->_listR = $this->db->get()-> result();
    }

    public function lessoumis() {
        $this->db->select("id, title, alias, content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);
                 $this->db->where('status', 'S');
                 

        
        $this->_listS = $this->db->get()-> result();
    }

        //retourne le nombre total d'article d'un agent
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
    //retourne la liste des demande traitées et non encore traitées de la celcom de la celcom
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


        //retourne les articles validés par la celcom qui sont visible par tous les agents
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



    // retourne la liste des articles soumis par les agents à la celcom (voir page d'accueil celcom) 
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
        $this->db->select("id, title, alias, content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);
                 $this->db->where('status', 'B');
        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_listbrouillon = $this->db->get()-> result();
    }

        //Charger les articles non soumis dans le compte de l'agent
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
    
        //Charger les articles Soumis dans le compte de l'agent
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

    //Charger les articles soumis et non encore traités
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

    //Charger les articles validés
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

    //Charger les articles rejetés
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


    

    //Charger les articles mises en attente
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


    

    //Charger les articles validés mais dans le compte de l'agent
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

    //Charger les articles rejetés mais dans le compte de l'agent
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
    //Charger les articles mis en attente mais dans le compte de l'agent
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