<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function _remap($method, $params = array()) {
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $params);
        }
        else{
            array_unshift($params, $method);
            return call_user_func_array(array($this, 'index'), $params);
        }
        show_404();
    }

    public function index($param1=0,$param2=0) {
        echo "<pre>";
        var_dump($param1);
        var_dump($param2);
    }

}
