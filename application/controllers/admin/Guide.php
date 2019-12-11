<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Guide extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/model_data', 'mData');       
    }
    
    public function index()
    {
        if ($this->session->userdata('logged') == TRUE) {
        $data['content']='admin/guide_view';
        $data['tourguide']=$this->mData->getTourguide();
		$data['data_kota']=$this->mData->getKota();
        $this->load->view('admin/template', $data);
        
    } else {
        $this->load->view('loginadmin_view');        
    }
    }

    public function add_guide()
    {
            $this->form_validation->set_rules('nama', 'Title', 'trim|required');
            $this->form_validation->set_rules('kemampuan', 'Year', 'trim|required');
            $this->form_validation->set_rules('telp', 'Genre', 'trim|required');
            $this->form_validation->set_rules('id_kota', 'OfficialSite', 'trim|required');
            // $this->form_validation->set_rules('Photo', 'Photo', 'trim|required');
            
            if ($this->form_validation->run() == TRUE) {

                $config['upload_path'] = './assets/img_guide/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2000000';
                $this->load->library('upload', $config);
                if($this->upload->do_upload('foto'))
                {
                    if($this->mData->addGuide($this->upload->data()) == TRUE)
                    {

                       $this->session->set_flashdata('notif','Berhasil');
                       redirect('Admin/Guide');
                       
                    } else {

                        $this->session->set_flashdata('notif','Gagal');
                        redirect('Admin/Guide');
                    }
                } else {
                    $this->session->set_flashdata('notif', 'Tambah Movie Gagal Upload');
                    redirect('Admin/Guide');
                }
                 
            } else {
                $this->session->set_flashdata('notif',validation_errors());
                redirect('Admin/Guide');
            }   
    }

    public function delete_guide()
    {   
            $id_tourguide = $this->uri->segment(4);

            if($this->mData->delete($id_tourguide)){
                $this->session->set_flashdata('notif', ' Berhasil Hapus');
                redirect('Admin/Guide');
            } else {
                $this->session->set_flashdata('notif', ' Gagal Hapus');
                redirect('Admin/Guide');
            }      
    }

    public function get_data_tourguide_by_id($id_tourguide)
	{
			$data = $this->mData->get_data_tourguide_by_id($id_tourguide);
			echo json_encode($data);
    }

    public function edit()
	{
			$this->form_validation->set_rules('edit_nama', 'Title', 'trim|required');
			$this->form_validation->set_rules('edit_kemampuan', 'Year', 'trim|required');
			$this->form_validation->set_rules('edit_telp', 'Genre', 'trim|required|numeric');
			$this->form_validation->set_rules('edit_id_kota', 'OfficialSite', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->mData->editGuide() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Ubah berhasil');
					redirect('Admin/Guide');
				} else {
					$this->session->set_flashdata('notif', 'Ubah gagal');
					redirect('Admin/Guide');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('Admin/Guide');
			}
		
	}

    
}

/* End of file Kategori.php */
