<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function loadHome()
    {
        //to show heroes (decoded)
        $hero = file_get_contents('https://api.opendota.com/api/heroes');
        $this->data['hero'] = json_decode($hero);

        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('home',$this->data);
        $this->load->view('footer');
    }
}