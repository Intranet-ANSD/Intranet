<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListerCommunique extends CI_Model {

    protected $_listC;
    
    public function __construct() {
        parent::__construct();
        $this->_listC = [];
        $this->_listCb = [];
       
    
    }

    public function __get($key) {
        $method_name = 'get_property_' . $key;
        if (method_exists($this, $method_name)) {
            return $this->$method_name();
        } else {
            return parent::__get($key);
        }
    }
        //verifie s'il y'a un communique ou pas
    protected function get_property_has_itemsC() {
        return count($this->_listC) > 0;
    }

    protected function get_property_has_itemsCb() {
        return count($this->_listCb) > 0;
    }

    
    
    
    

    //retourne la liste des communiqués
    protected function get_property_itemsC() {
        return $this->_listC;
    }

    protected function get_property_itemsCb() {
        return $this->_listCb;
    }


    
    //le nombre de communiqués
    protected function get_property_num_itemsC() {
        return count($this->_listC);
    }

    protected function get_property_num_itemsCb() {
        return count($this->_listCb);
    }

    
    //Charger tous les communiqués
    public function load($show_hidden = FALSE) {
        $this->db->select("id, title, alias, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image,author ")
                 ->from('communique_username')
                 -> order_by('date', 'DESC');
                 
        $this->_listC = $this->db->get()-> result();
    }


    public function getCategories()
    {
        $categories = $this->db->get('categorie');
        if($categories->num_rows() > 0 ) {
            return $categories->result();
        }
    }

    public function viewAllCategories()
    {
        $this->db->select(['categorie.categorie_id', 'categorie.nom']);
         $this->db->from('categorie');
         
         $categories = $this->db->get();
         return $categories->result();
    }

    public function getCategorie($categorie_id)
        {
            $this->db->select("id, title, alias,categorie.nom, SUBSTRING_INDEX(content, ' ', 20) AS content, date,image,author ")
            ->from('communique_username');
        $this->db->join('categorie', 'categorie.categorie_id = communique_username.categorie_id');
        $this->db->where(['communique_username.categorie_id' => $categorie_id]);
        $communiques = $this->db->get();
        return $communiques->result();
        //$this->_listCb = $this->db->get()-> result();                    
        }

        




    


}