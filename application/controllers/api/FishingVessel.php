<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FishingVessel extends CI_Controller {

    public function index()
    {
        echo 'json';
    }
    public function all_ship()
    {
        $this->load->model('fishingvessel_model');
        $data['vessels'] = $this->fishingvessel_model->get_all();
        //var_dump($data);
        echo json_encode($data['vessels']);
    }
    public function create()
    {
        
    }

}

/* End of file FishingVessel.php */

?>