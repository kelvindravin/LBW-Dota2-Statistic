<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Search_by_name extends CI_Controller
{
    var $URL_NAME= "https://api.opendota.com/api/search";

    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        if(empty(htmlspecialchars($this->input->post('playerpersona')))){
            header('Location:home');
            exit();
        }
        date_default_timezone_set("asia/jakarta");
        $getQueryString = htmlspecialchars($this->input->post('playerpersona'));  
        $getQueryString = rawurlencode($getQueryString);   
        $queryString = $this->URL_NAME.'?q='.$getQueryString;
        $result['result'] = file_get_contents($queryString);        
        $this->data['current_nav'] = "";
        $this->load->view('header');
        $this->load->view('navbar',$this->data);
        $this->load->view('searchByPersonaName',$result);
    }
}