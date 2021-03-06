<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Communique extends CI_Model {

    protected $_alias;
    protected $_author;
    protected $_author_id;
    protected $_content;
    protected $_date;
    protected $_id;
    protected $_title;
    protected $_image;

    public function __construct() {
        parent::__construct();
        $this->clear_data();
    }

    public function __get($key) {
        $method_name = 'get_property_' . $key;
        if (method_exists($this, $method_name)) {
            return $this->$method_name();
        } else {
            return parent::__get($key);
        }
    }

    public function __set($key, $value) {
        $method_name = 'set_property_' . $key;
        if (method_exists($this, $method_name)) {
            $this->$method_name($value);
        } else {
            parent::__set($key, $value);
        }
    }

    protected function clear_data() {
        $this->_alias = NULL;
        $this->_author = NULL;
        $this->_author_id = NULL;
        $this->_content = NULL;
        $this->_date = NULL;
        $this->_id = NULL;
        $this->_title = NULL;
        $this->_image = NULL;
    }

    protected function get_property_alias() {
        return $this->_alias;
    }

    protected function get_property_author() {
        return $this->_author;
    }

    protected function get_property_author_id() {
        return $this->_author_id;
    }

    protected function get_property_content() {
        return $this->_content;
    }

    protected function get_property_date() {
        return $this->_date;
    }

    protected function get_property_id() {
        return $this->_id;
    }

    protected function get_property_is_found() {
        return $this->_id !== NULL;

    }


    protected function get_property_title() {
        return $this->_title;
    }

    protected function get_property_image() {
        return $this->_image;
    }

    public function load($id, $show_hidden = FALSE) {
        $this->clear_data();
        $this->db
             ->from('communique_username')
             ->where('id', $id);
        
        $data = $this->db
                     ->get()
                     ->first_row();
        if ($data !== NULL) {
            $this->_alias = $data->alias;
            $this->_author = $data->author;
            $this->_author_id = $data->author_id;
            $this->_content = $data->content;
            $this->_date = $data->date;
            $this->_id = $data->id;
            $this->_title = $data->title;
            $this->_image = $data->image;
        }
    }

    public function save() {
         
            $data['alias'] = $this->_alias;
            $data['author_id'] = $this->_author_id;
            $data['content'] = $this->input->post('content');
            $data['title'] = $this->input->post('title');
            $data['categorie_id'] = $this->input->post('categorie_id');
                    
                        
                   
                   //Ajout d'une image
         
           if(isset($_FILES['image']['name']))
           {
               $this->load->library('upload');
               $config['upload_path'] = APPPATH.'../uploads/';
               $config['allowed_types'] = 'gif|jpg|png';
               $config['file_name'] = date('YmdHms').'_'.rand(1,999999);
               $this->upload->initialize($config);
               if($this->upload->do_upload('image'))
               {
                   $uploaded = $this->upload->data();
                   $data['image'] = $uploaded['file_name'];
                   $this->resize_image(APPPATH.'../uploads/'.$data['image'],900);
                   $this->createThumbnail(APPPATH.'../uploads/'.$data['image'],APPPATH.'../uploads/thumbnail/'.$data['image'],400,300);
                   //$data['image'] = 
               }
           }
           //Fin Ajout d'image
        
        
        if ($this->is_found) {
            $this->db->where('id', $this->_id)
                     -> update('communique', $data);
        } else {
            $data['date'] = date('Y-m-d H:i:s');
            $this->db->insert('communique', $data);
            $id = $this->db->insert_id();
            $this->load($id, TRUE);
        }
    }
    //Fin save


    //traitement de l'image
    function resize_image($source,$width)
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] = $source;
		$config['maintain_ratio'] = TRUE;
		$config['width']         = $width;

		$this->load->library('image_lib', $config);

		$this->image_lib->resize();
		$this->image_lib->clear();
	}
	function createThumbnail($source,$destination,$width,$height)
	{
		$this->load->library('image_lib');
		$config['image_library'] = 'gd2';
		$config['source_image'] = $source;
		$config['new_image'] = $destination;
		$config['maintain_ratio'] = FALSE;
		$config['width']         = $width;
		$config['height'] = $height;

		$this->image_lib->initialize($config);

		$this->image_lib->resize();
		$this->image_lib->clear();
	}
    //Fin traitement de l'image

    protected function set_property_author_id($author_id) {
        $this->_author_id = $author_id;
    }

    protected function set_property_content($content) {
        $this->_content = $content;
    }
    protected function set_property_image($image) {
        $this->_image = $image;
    }

    protected function set_property_title($title) {
        $alias = url_title($title, 'underscore', TRUE);
        $this->_title = $title;
        $this->_alias = $alias;
    }

    public function delete() {
        if ($this->is_found) {
//            $this->_status = 'B';
            $this->save();
        }
    }
}