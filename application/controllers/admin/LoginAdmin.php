<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdmin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/model_Data', 'mData');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        if ($this->session->userdata('logged') == TRUE) {
            
            redirect('Admin/Kota');
            
        } else {
            
            $this->load->view('loginadmin_view');
            
        }
        
    }

    public function prosesLogin()
    {
        if ($this->mData->LoginAdmin()) {
            
            redirect('Admin/Kota');
        
        } else {
           
          redirect('admin/loginAdmin');
           
        }
        
    }
    
    public function logout()
    {
        if($this->session->userdata('logged') == TRUE){
        $this->session->sess_destroy();
        redirect('Admin/LoginAdmin');   
        }
    }


}


