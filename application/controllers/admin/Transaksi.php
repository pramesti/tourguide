<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/model_Data', 'mData');
        $this->load->library('form_validation');
    }
    
    public function index()
    {

        if ($this->session->userdata('logged') == TRUE) {
        $data['content']='admin/pemesanan_view';
        $data['transaksi']=$this->mData->getTransaksi();
        $data['status']=$this->mData->getStatus();
        $this->load->view('admin/template', $data);

    } else {
            
        $this->load->view('loginadmin_view');
        
    }
    }

    public function terverif()
    {
        $data['content']='admin/terverif_view';
        $data['transaksi']=$this->mData->getTerverif();
        $data['status']=$this->mData->getStatus();
        $this->load->view('admin/template', $data);
    }

    public function verif()
    {
        $this->form_validation->set_rules('edit_id_status', 'Status', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->mData->verifikasi() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Ubah berhasil');
					redirect('Admin/Transaksi');
				} else {
					$this->session->set_flashdata('notif', 'Ubah gagal');
					redirect('Admin/Transaksi');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('Admin/Transaksi');
			}		
    }

    public function get_data_transaksi_by_id($id_transaksi)
	{
			$data = $this->mData->get_data_transaksi_by_id($id_transaksi);
			echo json_encode($data);
    }
    
}

/* End of file Kategori.php */
