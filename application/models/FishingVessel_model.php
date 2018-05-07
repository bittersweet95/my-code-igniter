<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FishingVessel_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_all()
    {
    $query = $this->db->get('vessel');//select * from vessel
    $result = $query->result_array();
    //var_dump($result);
    return $result;
    }
    public function save_new_vessel($image_path)
    {
        $data['Name'] = $this->input->post('vesselName');
        $data['Country_ID'] = $this->input->post('country');
        $data['imagePath'] = $image_path;

        return $this->db->insert('Vessel',$data);
    }

    
    public function delete_vessel()
    {
        $data['id'] = $this->input->post('vesselID');
        return $this->db->delete('Vessel',$data);
    }

}

/* End of file FishingVessel_model.php */

?>