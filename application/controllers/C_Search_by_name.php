<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Search_by_name extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function loadSearchByName(){
        $getQueryString = $this->input->post('playerpersona');
        $response = file_get_contents("https://api.opendota.com/api/search?q=" . $getQueryString);
        $this->data["persona_data"] = json_decode($response);
        $this->data['current_nav'] = "searchByPersona";
        $this->data['persona_searched'] = $getQueryString;

        $this->load->view('header');
        $this->load->view('navbar',$this->data);
        $this->load->view('searchByPersonaName',$this->data);
        $this->load->view('footer');
    }

    public function findUserByPersonaName(){
        $id = $this->input->get('id');

        $response = file_get_contents('https://api.opendota.com/api/players/' . $id);
        $user_data = json_decode($response, true);

        // place user_data to session
        $this->session->set_userdata('user_data', $user_data);
        redirect(base_url("matches"));
    }
}