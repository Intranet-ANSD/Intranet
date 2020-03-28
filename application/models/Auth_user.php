<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_user extends CI_Model {

    protected $_username;
    protected $_id;
    protected $_profil_id;

    public function __construct() {
        parent::__construct();
        $this->load_from_session();
    }

    public function __get( $key) {
        $method_name = 'get_property_' . $key;
        if (method_exists($this, $method_name)) {
            return $this->$method_name();
        } else {
            return parent::__get( $key);
        }
    }

    protected function clear_data() {
        $this->_id = NULL;
        $this->_username = NULL;
        $this->_profil_id = NULL;
    }

    protected function clear_session() {
        $this->session->auth_user = NULL;
    }

    protected function get_property_id() {
        return $this->_id;
    }
    
    //Permet de verifier si l'utilisateur est connecté
    protected function get_property_is_connected() {
        return $this->_id !== NULL;
    }

    protected function get_property_username() {
        return $this->_username;
    }

    
    protected function get_property_profil_id() {
        return $this->_profil_id;
    }
    protected function load_from_session() {
        if ($this->session->auth_user) {
            $this->_id = $this->session->auth_user['id'];
            $this->_username = $this->session->auth_user['username'];
            $this->_profil_id = $this->session->auth_user['profil_id'];
        } else {
            $this->clear_data();
        }
    }

    protected function load_user( $username) {
        return $this->db
                    ->select('id, username, password')
                    ->from('login')
                    ->where('username', $username)
                    //->where('profil_id', 'A')
                    ->get()
                    ->first_row();
    }

    public function login( $username, $password) {
        $user = $this->load_user( $username);
        if (( $user !== NULL) && password_verify($password, $user->password)) {
            $this->_id = $user->id;
            $this->_username = $user->username;
            $this->_profil_id = $user->profil_id;
            $this->save_session();
        } else {
            $this->logout();
        }
    }

    public function logout() {
        $this->clear_data();
        $this->clear_session();
    }

    protected function save_session() {
        $this->session->auth_user = [
            'id' => $this->_id,
            'username' => $this->_username,
            'profil_id' => $this->_profil_id
        ];
    }
}