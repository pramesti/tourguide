<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/model_data', 'mData');
        
    }
    
    public function index()
    {
        if ($this->session->userdata('logged') == TRUE) {
    
        $data['content'] = 'admin/kota_view';
        $data['kota']=$this->mData->getKota();
        $this->load->view('admin/template', $data);
        
    } else {
        $this->load->view('loginadmin_view');        
    }
    }

    public function get_data_kota_by_id($id_kota)
	{
			$data = $this->mData->get_data_kota_by_id($id_kota);
			echo json_encode($data);
    }
    
    public function edit()
	{
        $this->form_validation->set_rules('edit_nama_kota', 'Kota', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->mData->editKota() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Ubah berhasil');
					redirect('Admin/Kota');
				} else {
					$this->session->set_flashdata('notif', 'Ubah gagal');
					redirect('Admin/Kota');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('Admin/Kota');
			}		
    }
    
    public function add_kota()
    {
        $this->form_validation->set_rules('nama_kota', 'Nama Kota', 'trim|required');
        
        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './assets/img_city/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2000000';
            $this->load->library('upload', $config);
            if($this->upload->do_upload('photo'))
            {
                if($this->mData->addKota($this->upload->data()) == TRUE)
                {

                   $this->session->set_flashdata('notif','Berhasil');
                   redirect('Admin/Kota');
                   
                } else {

                    $this->session->set_flashdata('notif','Gagal');
                    redirect('Admin/Kota');
                }
            } else {
                $this->session->set_flashdata('notif', 'Tambah Movie Gagal Upload');
                redirect('Admin/Kota');
            }
             
        } else {
            $this->session->set_flashdata('notif',validation_errors());
            redirect('Admin/Kota');
        }   
    }

    public function delete_kota()
    {   
            $id_kota = $this->uri->segment(4);

            if($this->mData->deleteKota($id_kota)){
                $this->session->set_flashdata('notif', ' Berhasil Hapus');
                redirect('Admin/Kota');
            } else {
                $this->session->set_flashdata('notif', ' Gagal Hapus');
                redirect('Admin/Kota');
            }      
    }

    
    
}
