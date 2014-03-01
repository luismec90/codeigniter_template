<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function index() {
        $data["tab"] = "inicio";
        $data["css"] = array("css/inicio");
        $data["js"] = array("js/inicio");
        $this->load->view('include/header', $data);
        $this->load->view('inicio_view');
        $this->load->view('include/footer');
    }

}
