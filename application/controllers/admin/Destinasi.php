<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Destinasi extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/model_data', 'mData');
        
    }
    
    public function index()
    {
        if ($this->session->userdata('logged') == TRUE) {

        $data['content']='admin/destinasi_view';
        $data['destinasi']=$this->mData->getDestinasi();
        $data['data_kota']=$this->mData->getKota();
        $data['data_paket']=$this->mData->getPaket();
        $this->load->view('admin/template', $data);

    } else {
        $this->load->view('loginadmin_view');        
    }
    }

    public function get_data_destinasi_by_id($id_tempat)
	{
			$data = $this->mData->get_data_destinasi_by_id($id_tempat);
			echo json_encode($data);
    }
    
    public function edit()
	{
        $this->form_validation->set_rules('edit_id_kota', 'Kota', 'trim|required');
        $this->form_validation->set_rules('edit_id_paket', 'Paket', 'trim|required');
        $this->form_validation->set_rules('edit_nama_wisata', 'Nama Wisata', 'trim|required');
        $this->form_validation->set_rules('edit_deskripsi', 'Deskripsi', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->mData->editDestinasi() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Ubah berhasil');
					redirect('Admin/Destinasi');
				} else {
					$this->session->set_flashdata('notif', 'Ubah gagal');
					redirect('Admin/Destinasi');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('Admin/Destinasi');
			}		
    }
    
    public function add_destinasi()
    {
        $this->form_validation->set_rules('id_kota', 'Title', 'trim|required');
        $this->form_validation->set_rules('id_paket', 'Year', 'trim|required');
        $this->form_validation->set_rules('nama_wisata', 'Genre', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'OfficialSite', 'trim|required');
        $this->form_validation->set_rules('lokasi', 'Photo', 'trim|required');
        
        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './assets/img_destinasi/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2000000';
            $this->load->library('upload', $config);
            if($this->upload->do_upload('cover'))
            {
                if($this->mData->addDestinasi($this->upload->data()) == TRUE)
                {

                   $this->session->set_flashdata('notif','Berhasil');
                   redirect('Admin/Destinasi');
                   
                } else {

                    $this->session->set_flashdata('notif','Gagal');
                    redirect('Admin/Destinasi');
                }
            } else {
                $this->session->set_flashdata('notif', 'Tambah Movie Gagal Upload');
                redirect('Admin/Kota');
            }
             
        } else {
            $this->session->set_flashdata('notif',validation_errors());
            redirect('Admin/Destinasi');
        }   
    }

    public function delete_destinasi()
    {   
            $id_tempat = $this->uri->segment(4);

            if($this->mData->deleteDestinasi($id_tempat)){
                $this->session->set_flashdata('notif', ' Berhasil Hapus');
                redirect('Admin/Destinasi');
            } else {
                $this->session->set_flashdata('notif', ' Gagal Hapus');
                redirect('Admin/Destinasi');
            }      
    }

    
    
}

/* End of file Kategori.php */
