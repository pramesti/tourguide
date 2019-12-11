<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/model_data', 'mData');
        
    }

    public function index()
    {
        if ($this->session->userdata('logged') == TRUE) {
        $data['content']='admin/user_view';
        $data['user']=$this->mData->getuser();
        $this->load->view('admin/template', $data);

    } else {
            
        $this->load->view('loginadmin_view');
        
    }
    }

    public function get_data_user_by_id($id_user)
	{
			$data = $this->mData->get_data_user_by_id($id_user);
			echo json_encode($data);
    }
    
    public function edit()
	{
			$this->form_validation->set_rules('edit_nama_user', 'Nama', 'trim|required');
            $this->form_validation->set_rules('edit_email', 'Email', 'trim|required');
            $this->form_validation->set_rules('edit_telp', 'Telephone', 'trim|required|numeric');
            $this->form_validation->set_rules('edit_alamat', 'Alamat', 'trim|required');
            $this->form_validation->set_rules('edit_tgl_lahir', 'Tgl Lahir', 'trim|required');
			$this->form_validation->set_rules('edit_password', 'Pass', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->mData->editUser() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Ubah berhasil');
					redirect('Admin/User');
				} else {
					$this->session->set_flashdata('notif', 'Ubah gagal');
					redirect('Admin/User');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('Admin/User');
			}		
    }

}

/* End of file Controllername.php */
