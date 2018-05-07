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

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
       // $config['max_size'] = 100;
      //  $config['max_width'] = 1024;
      $this->load->library('upload',$config);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('vesselName','ชื่อเรือ','required|max_length[10]',array('required' => 'กรุณากรอกชื่อเรือ','max_length'=>'ชื่อเรือไม่เกิน 10 ตัวอักษร'));
        if($this->form_validation->run() == false)
        {
            $this->load->model('country_model');
            $result = $this->country_model->get_all();
            $data['country_list'] = $result;
            $data['title']="เพิ่มข้อมูลเรือประมง";

            $this->load->view('header',$data);
            $this->load->view('fishing-vessel/new-ship');
            $this->load->view('footer');
        }
        else
        {

        $upload_success = $this->upload->do_upload('vesselImage');
        if($upload_success){
            $upload_data = $this->upload->data();
           $image_path =  'upload/'.$upload_data['file_name'];
            //var_dump($upload_data);

            $this->load->model('fishingvessel_model');
            $this->fishingvessel_model->save_new_vessel($image_path);
            redirect('fishingvessel/');
        }
        else
        {
            $this->load->model('country_model');
            $result = $this->country_model->get_all();
            $data['country_list'] = $result;
            $data['title']="เพิ่มข้อมูลเรือประมง";

            $this->load->view('header',$data);
            $this->load->view('fishing-vessel/new-ship');
            $this->load->view('footer');
        }

        }
    }
    public function new_success()
    {

    }
    public function delete_vessel()
    {
        
        $this->load->model('fishingvessel_model');
        $this->fishingvessel_model->delete_vessel();
        
        redirect('fishingvessel/');
        
    }

}

/* End of file FishingVessel.php */

?>