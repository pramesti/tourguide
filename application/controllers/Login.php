<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data', 'mData');
        $this->load->model('Register_model');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        if ($this->session->userdata('logged_in') == TRUE) {
            
            redirect(base_url('Welcome/Home'));
            
        } else {
            
            $this->load->view('login_view');
            
        }
        
    }

    public function prosesLogin()
    {
        if ($this->mData->LoginUser()  ) {
            
            redirect('Welcome/Home');
        
        } else {
           
          redirect('login');
           
        }
        
    }
    
    public function logout()
    {
        
        $this->session->sess_destroy('');
        redirect('');   
    
    }

    public function register()
    {
      
            $this->form_validation->set_rules('nama_user', 'Nama', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if($this->form_validation->run() == TRUE){

                if($this->Register_model->insert() == TRUE){  
                    redirect('login');  
                } else {   
                    redirect('login');
                }
            } else {
                
                redirect('login');
                
            }
    }
    


}

/* End of file Login.php */
