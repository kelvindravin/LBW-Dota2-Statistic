<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Statistic extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function findUserByID()
    {
        $id = $this->input->post('playerid');

        $response = file_get_contents('https://api.opendota.com/api/players/' . $id);
        $user_data = json_decode($response, true);

        // check if userID is valid or not
        if (array_key_exists("profile", $user_data)) {
            $this->session->set_userdata('user_data', $user_data);
            redirect(base_url("matches"));
        } else {
            $this->session->set_flashdata('error', 'Steam Player ID tidak terdaftar!');
            redirect(base_url());
        }
    }

    public function changeID()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function loadMatches(){
        $data = $this->session->userdata('user_data');
        $id = $data["profile"]["account_id"];

        $response = file_get_contents('https://api.opendota.com/api/players/' . $id . '/matches');
        $this->data['matches'] = json_decode($response, true);
        if (sizeof($this->data['matches'])>0) {
            $this->load->view('header');
            $this->load->view('statistic/navbarStatistic');
            $this->load->view('statistic/match',$this->data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('error', 'Data match tidak ditemukan!');
            redirect(base_url());
        }
    }
}
