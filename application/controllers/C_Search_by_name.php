<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Search_by_name extends CI_Controller
{
    var $URL_NAME="https://api.opendota.com/api/search";

    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $getQueryString = $this->input->get('playerpersona');
        $this->data['current_nav'] = "";
        $this->load->view('header');
        $this->load->view('navbar',$this->data);
        $this->load->view('searchByPersonaName');
    }
}