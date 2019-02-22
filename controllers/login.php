<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index(){
        $this->load->view('login_view');
    }
    public function dologin(){
        if ($this->input->post('submit')){
            $this->form_validation->set_rules('nama','nama','trim|require');
            $this->form_validation->set_rules('nip','nip','trim|require');

            if ($this->form_validation->run()){
                if ($this->login_model->login() == TRUE){
                    redirect('admin/');
                }else{
                    $data['notif'] = 'gagal';
                    $this->load->view('login_view', $data);
                }
            }else{
                $data['notif']=validation_errors();
                $this->load->view('login_view', $data);
            }
        }
    }

}
?>