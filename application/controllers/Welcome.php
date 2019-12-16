<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
		parent::__construct();  
		$this->load->model('City_model');
		$this->load->library('form_validation');
		$this->load->library('upload');
	}
	
	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
                
			$this->load->view('index');
	
            
        } else {
   
			$this->load->view('first_view');	
		}

	}

	public function Home()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
                
			$this->load->view('index');
	
            
        } else {
            
            $this->load->view('login_view');
            
        }
	}

	public function City()
	{
		if ($this->session->userdata('logged_in') == TRUE) {

			$data['city'] = $this->City_model->get_data_city();
			$this->load->view('city_view', $data);	 

        } else {
            
            $this->load->view('login_view');
            
        }
	}

	public function Order()
	{
		if ($this->session->userdata('logged_in') == TRUE) {

		$data['order'] = $this->City_model->get_data_order();
		$this->load->view('pesanan_view', $data);

	} else {
            
		$this->load->view('login_view');
		
	}
	}


	public function Destinasi($id)
	{
	if ($this->session->userdata('logged_in') == TRUE) {
		$data['destinasi'] = $this->City_model->get_data_destinasi($id);
		$this->load->view('destinasi_view', $data);
	} else {
            
		$this->load->view('login_view');
		
	}
	}

	public function Profil()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
		$data['user'] = $this->City_model->get_data_user();
		$this->load->view('profil_view', $data);
	} else {
            
		$this->load->view('login_view');
		
	}
	}

	public function get_data_user_by_id($id_user)
	{
			$data = $this->City_model->get_data_user_by_id($id_user);
			echo json_encode($data);
    }

	public function CekOrder()
	{
		if ($this->session->userdata('logged_in') == TRUE) {

		$data['transaksi']=$this->City_model->get_data_transaksi();
	
		$this->load->view('cekorder_view',$data);

	} else {
            
		$this->load->view('login_view');
		
	}
	}

	public function Tourguide($id)
	{
		$data['tourguide'] = $this->City_model->get_data_tourguide($id);
		$this->load->view('guide_view', $data);
	}

	public function cari_guide($kode)
    {
      if($this->session->userdata('logged_in') == TRUE){
        
        $kode = $this->uri->segment(3);
        
        if($this->City_model->cari_guide($kode) == TRUE)
        {
		  redirect('Welcome/Order');
        } else {
          $this->session->set_flashdata('notif', 'asdasdsd');
		  redirect('Welcome/Order');
        }
  
      } else {
        redirect('login');
      }
	}
	
	public function cari_paket($kode)
    {
      if($this->session->userdata('logged_in') == TRUE){
        
        if($this->City_model->cari_paket($kode) == TRUE)
        {
		  redirect('Welcome/tourguide/'.$kode);
        } else {
          $this->session->set_flashdata('notif', 'asdasdsd');
		  redirect('Welcome/City');
        }
  
      } else {
        redirect('login');
      }
	}

	public function delete_pesanan($id_pesanan)
    {   
            if($this->City_model->deletePesanan($id_pesanan)){
                $this->session->set_flashdata('notif', ' Berhasil Hapus');
                redirect('Welcome/Order');
            } else {
                $this->session->set_flashdata('notif', ' Gagal Hapus');
                redirect('Welcome/Order');
            }      
	}
	
	public function pesan()
    {
      if($this->session->userdata('logged_in') == TRUE){
  
        //insert ke tabel transaksi dulu
        if($this->City_model->tambah_transaksi() == TRUE)
        {
          $this->session->set_flashdata('notif', 'Proses berhasil');
          redirect('Welcome/order');
  
        } else {
          $this->session->set_flashdata('notif', 'Proses gagal');
          redirect('Welcome/order');
        }
  
      } else {
        redirect('login');
      }
	}
	
	public function add_struk()
    {        

                $config['upload_path'] = './assets/img_transfer/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2000000';
                $this->load->library('upload', $config);
                if($this->upload->do_upload('file'))
                {
                    if($this->City_model->addStruk($this->upload->data()) == TRUE)
                    {

                       $this->session->set_flashdata('notif','Berhasil');
                       redirect('Welcome/cekorder');
                       
                    } else {

                        $this->session->set_flashdata('notif','Gagal');
                        redirect('Welcome/cekorder');
                    }
                } else {
                    $this->session->set_flashdata('notif', 'Gagal Upload');
                    redirect('Welcome/order');
                }

	}
	
	public function edit_user()
	{
			$this->form_validation->set_rules('edit_nama_user', 'Title', 'trim|required');
			$this->form_validation->set_rules('edit_email', 'Title', 'trim|required');
			$this->form_validation->set_rules('edit_telp', 'Title', 'trim|required');
			$this->form_validation->set_rules('edit_alamat', 'Title', 'trim|required');
			$this->form_validation->set_rules('edit_tgl_lahir', 'Title', 'trim|required');
			$this->form_validation->set_rules('edit_password', 'Title', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->City_model->editUser() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Ubah berhasil');
					redirect('Welcome/profil');
				} else {
					$this->session->set_flashdata('notif', 'Ubah gagal');
					redirect('Welcome/profil');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('Welcome/profil');
			}
		
	}

	public function get_data_transaksi_by_id($id_transaksi)
	{
			$data = $this->City_model->get_transaksi_by_id($id_transaksi);
			echo json_encode($data);
	}
	
	public function struk()
	{
		$config['upload_path'] = './assets/img_transfer/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '0';
		$config['file_name'] = $_FILES['file']['name'];

		$path = './assets/img_transfer/';

		$this->upload->initialize($config);

			if(!empty($_FILES['file']['name'])) {
				if($this->upload->do_upload('file')) {
					$file = $this->upload->data();

					$this->City_model->updateStruk($file, $id_f);
					redirect('Welcome/cekorder');
				} else {
					
					redirect('Welcome/order');
					
				}
			} else {
				redirect('Welcome/order');
			}	
	}

	public function add_jadwal()
    {
            $this->form_validation->set_rules('jadwal', 'Jadwal', 'trim|required');
            // $this->form_validation->set_rules('Photo', 'Photo', 'trim|required');
            
            if ($this->form_validation->run() == TRUE) {

                    if($this->City_model->addTanggal() == TRUE)
                    {

                       $this->session->set_flashdata('notif','Berhasil');
                       redirect('Welcome/tourguide');
                       
                    } else {

                        $this->session->set_flashdata('notif','Gagal');
                        redirect('Welcome/destinasi');
                    }
                } else {
                    $this->session->set_flashdata('notif', 'maaf gagal');
                    redirect('Welcome/destinasi');
                }
	}
	
	public function tanggal()
	{
		 
	}

	

}
