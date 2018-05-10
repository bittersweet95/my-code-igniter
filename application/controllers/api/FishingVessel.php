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
    /// /api/fishingvessel/create
    public function create()
    {
        $input_data = json_decode(trim(file_get_contents('php://input')),true);
        $vesselName = $input_data['Name'];
        $countryID = $input_data['Country_ID'];

        $this->load->model('fishingvessel_model');
        $result = $this->fishingvessel_model->save_new_vessel_with_variable($vesselName,$countryID);

        $data['result_info'] = $result;
        echo json_encode($data);
    }

}

/* End of file FishingVessel.php */

?>