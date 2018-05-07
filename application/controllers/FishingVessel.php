<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FishingVessel extends CI_Controller {

    public function index()
    {
        $this->load->model('fishingvessel_model');
        $result = $this->fishingvessel_model->get_all();

        
        $data['vessels'] = $result;
       $this->load->view('header');
       $this->load->view('fishing-vessel/index',$data);
       $this->load->view('footer');
    }
    public function all()
    {
        echo 'Show all vessel';
    }
    public function new_vessel()
    {
        $this->load->model('country_model');
        $result = $this->country_model->get_all();
        $data['country_list'] = $result;
        $data['title']="เพิ่มข้อมูลเรือประมง";

        $this->load->view('header',$data);
        $this->load->view('fishing-vessel/new-ship');
        $this->load->view('footer');
    }
    public function create()
    {
        var_dump($_POST);
        $this->load->model('fishingvessel_model');
        $this->fishingvessel_model->save_new_vessel();
        redirect('fishingvessel/');
        
    }
    public function new_success()
    {

    }

}

/* End of file FishingVessel.php */

?>