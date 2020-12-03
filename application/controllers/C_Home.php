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
        $this->load->view('addOnInit');
        $this->load->view('home');
    }
}