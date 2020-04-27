<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListerArticles extends CI_Model {

    protected $_list;
    protected $_listbrouillon;
    protected $_listNonSoumis;
    protected $_listattente;
    protected $_listvalide;
    protected $_listrejete;
    

    public function __construct() {
        parent::__construct();
        $this->_list = [];
        $this->_listbrouillon = [];
        $this->_listNonSoumis = [];
        $this->_listattente = [];
        $this->_listvalide = [];
        $this->_listrejete = [];
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

    protected function get_property_has_itemsattente() {
        return count($this->_listattente) > 0;
    }
    protected function get_property_has_itemsvalide() {
        return count($this->_listvalide) > 0;
    }
    protected function get_property_has_itemsrejete() {
        return count($this->_listrejete) > 0;
    }


    
        //verifie s'il y'a article ou pas
        protected function get_property_has_itemsbrouillon() {
            return count($this->_listbrouillon) > 0;
        }

         //verifie s'il y'a article ou pas
         protected function get_property_has_itemsNonSoumis() {
            return count($this->_listNonSoumis) > 0;
        }

        protected function get_property_itemsattente() {
            return $this->_listattente;
        }
        protected function get_property_itemsvalide() {
            return $this->_listvalide;
        }
        protected function get_property_itemsrejete() {
            return $this->_listrejete;
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

    //le nombre d'articles
    protected function get_property_num_items() {
        return count($this->_list);
    }

    protected function get_property_num_itemsbrouillon() {
        return count($this->_listbrouillon);
    }

    protected function get_property_num_itemsNonSoumis() {
        return count($this->_listNonSoumis);
    }

    protected function get_property_num_itemsattente() {
        return count($this->_listattente);
    }
    protected function get_property_num_itemsvalide() {
        return count($this->_listvalide);
    }
    protected function get_property_num_itemsrejete() {
        return count($this->_listrejete);
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
    
    public function demande($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image, status, author ")
                 ->from('article_username')
                 -> order_by('date', 'DESC');
                 $names = array('R', 'V', 'A');
                 $this->db->where_in('status', $names);
                 

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
                 $this->db->where('status', 'N');
        if (!$show_hidden) {
            $this->db->where('status', 'N');
           
        }
        $this->_listNonSoumis = $this->db->get()-> result();
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
}