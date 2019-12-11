<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/model_Data', 'mData');
        
    }
    
    public function index()
    {
        if ($this->session->userdata('logged') == TRUE) {
        $data['content']='admin/paket_view';
        $data['paket']=$this->mData->getPaket();
        $this->load->view('admin/template', $data);
    } else {
            
        $this->load->view('loginadmin_view');
        
    }
    }
    
    public function get_data_paket_by_id($id_paket)
	{
			$data = $this->mData->get_data_paket_by_id($id_paket);
			echo json_encode($data);
    }
    
    public function edit()
	{
			$this->form_validation->set_rules('edit_nama_paket', 'Title', 'trim|required');
			$this->form_validation->set_rules('edit_harga', 'Year', 'trim|required|numeric');

			if ($this->form_validation->run() == TRUE) {
				if($this->mData->editPaket() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Ubah berhasil');
					redirect('Admin/Paket');
				} else {
					$this->session->set_flashdata('notif', 'Ubah gagal');
					redirect('Admin/Paket');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('Admin/Paket');
			}		
    }
    
    public function add_paket()
    {
            $this->form_validation->set_rules('nama_paket', 'Paket', 'trim|required');
            $this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');
            // $this->form_validation->set_rules('Photo', 'Photo', 'trim|required');
            
            if ($this->form_validation->run() == TRUE) {

                    if($this->mData->addPaket() == TRUE)
                    {

                       $this->session->set_flashdata('notif','Berhasil');
                       redirect('Admin/Paket');
                       
                    } else {

                        $this->session->set_flashdata('notif','Gagal');
                        redirect('Admin/Paket');
                    }
                } else {
                    $this->session->set_flashdata('notif', 'Tambah Movie Gagal Upload');
                    redirect('Admin/Paket');
                }
    }

    public function delete_paket()
    {   
            $id_paket = $this->uri->segment(4);

            if($this->mData->deletePaket($id_paket)){
                $this->session->set_flashdata('notif', ' Berhasil Hapus');
                redirect('Admin/Paket');
            } else {
                $this->session->set_flashdata('notif', ' Gagal Hapus');
                redirect('Admin/Paket');
            }      
    }
}

/* End of file Kategori.php */
