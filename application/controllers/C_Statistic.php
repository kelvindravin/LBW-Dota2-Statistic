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

    public function loadMatches()
    {
        $data = $this->session->userdata('user_data');
        $id = $data["profile"]["account_id"];
        $this->data['current_nav'] = "matches";

        $response = json_decode(file_get_contents('https://api.opendota.com/api/players/' . $id . '/matches'),true);
        $heroIdToName = json_decode(file_get_contents('https://api.opendota.com/api/heroes'));
        
        $idToHeroName=array();
        foreach($heroIdToName as $row){
            $idToHeroName[$row->id] =  $row->localized_name;
        }
        foreach($response as $key => $row){
            if(array_key_exists($row['hero_id'],$idToHeroName)){
                $response[$key]['heroes'] = $idToHeroName[$row['hero_id']];
            }
            else{
                $response[$key]['heroes'] = "undefined";
            }
        }

        $this->data['matches'] = $response;
        if (sizeof($this->data['matches']) > 0) {
            $this->load->view('header');
            $this->load->view('statistic/navbarStatistic',$this->data);
            $this->load->view('statistic/match', $this->data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('error', 'Data match tidak ditemukan!');
            redirect(base_url());
        }
    }

    public function loadStats()
    {
        $data = $this->session->userdata('user_data');
        $id = $data["profile"]["account_id"];
        $this->data['current_nav'] = "stats";

        $response = file_get_contents('https://api.opendota.com/api/players/' . $id . '/totals');

        $this->data['stats'] = json_decode($response, true);
        if (sizeof($this->data['stats']) > 0) {
            $this->load->view('header');
            $this->load->view('statistic/navbarStatistic', $this->data);
            $this->load->view('statistic/stats', $this->data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('error', 'Data match tidak ditemukan!');
            redirect(base_url());
        }
    }

    public function findComparatorByID()
    {
        //ambil data comparator
        $idComparator = $this->input->post('playerid');
        //ambil data sebelumnya
        $data = $this->session->userdata('user_data');
        $id = $data["profile"]["account_id"];
        $this->data['current_nav'] = "stats";

        //ambil status dari player current
        $statsPlayer = file_get_contents('https://api.opendota.com/api/players/' . $id . '/totals');
        $this->data['statsPlayer'] = json_decode($statsPlayer, true);

        //ambil status dari comparator
        $comparatorData = file_get_contents('https://api.opendota.com/api/players/' . $idComparator);
        $this->data['comparatorData'] = json_decode($comparatorData, true);
        $comparatorStats = file_get_contents('https://api.opendota.com/api/players/' . $idComparator . '/totals');
        $this->data['comparatorStats'] = json_decode($comparatorStats, true);

        // check if comparator data is valid or not
        if (array_key_exists("profile", $this->data['comparatorData'])) {            
            $this->load->view('header');
            $this->load->view('statistic/navbarStatistic', $this->data);
            $this->load->view('statistic/stats_compare', $this->data);
            $this->load->view('footer');

        } else {
            $this->session->set_flashdata('error', 'Steam Player ID tidak terdaftar!');
            redirect(base_url("stats"));
        }
    }

    public function loadComparationStatsByName(){
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
        $this->data['current_nav'] = "stats";

        $this->load->view('header');
        $this->load->view('statistic/navbarStatistic',$this->data);
        $this->load->view('statistic/compareByPersonaName',$this->data);
        $this->load->view('footer');
    }
}
