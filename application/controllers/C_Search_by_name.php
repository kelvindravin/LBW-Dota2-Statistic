<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Search_by_name extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function loadSearchByName(){
        if(empty(htmlspecialchars($this->input->post('playerpersona')))){
            header('Location:home');
            exit();
        }
        date_default_timezone_set("asia/jakarta");
        $getQueryString = $this->input->post('playerpersona');        
        $this->data['persona_searched'] = $getQueryString;
        $getQueryString = rawurlencode($getQueryString); 
        $response = file_get_contents("https://api.opendota.com/api/search?q=" . $getQueryString);
        $this->data["persona_data"] = json_decode($response);
        $this->data['current_nav'] = "searchByPersona";

        $this->load->view('header');
        $this->load->view('navbar',$this->data);
        $this->load->view('searchByPersonaName',$this->data);
        $this->load->view('footer');
    }
}