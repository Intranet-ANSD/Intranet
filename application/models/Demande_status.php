<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demande_status {

    protected $_status;

    public function __construct() {
        $this->_status = [
            'V' => [
                'text' => 'Valide',
                'decoration' => 'primary'
                   ],
                   
              'R' => [
                'text' => 'rejete',
                'decoration' => 'danger'
                     ]
                     ,
                   
              'A' => [
                'text' => 'Attente',
                'decoration' => 'warning'
                     ]
                     
        ];
    }

    public function __get($key) {
        $method_name = 'get_property_' . $key;
        if (method_exists($this, $method_name)) {
        return $this->$method_name();
        } else {
        return parent::__get($key);
        }
    }

    protected function get_property_label() {
        $result = [];
        foreach($this->_status as $key => $value) {
            $result[$key] = '<span class="label label-' . $value['decoration'] . '">'
                            . $value['text'] . '</span>';
        }
        return $result;
    }

    protected function get_property_text() {
        $result = [];
        foreach($this->_status as $key => $value) {
            $result[$key] = $value['text'];
        }
        return $result;
    }

    protected function get_property_codes() {
        return array_keys($this->_status);
    }
}