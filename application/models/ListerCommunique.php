<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListerCommunique extends CI_Model {

    protected $_listC;
    
    public function __construct() {
        parent::__construct();
        $this->_listC = [];
       
    
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
    protected function get_property_has_itemsC() {
        return count($this->_listC) > 0;
    }

    
    
    
    

    //retourne la liste des articles
    protected function get_property_itemsC() {
        return $this->_listC;
    }

    


    
    //le nombre d'articles
    protected function get_property_num_itemsC() {
        return count($this->_listC);
    }
    
    
    //Charger tous les articles
    public function load($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image,author ")
                 ->from('communique_username')
                 -> order_by('date', 'DESC');
                 $this->db->where('author', $this->session->auth_user['username']);

        $this->_listC = $this->db->get()-> result();
    }

   

}