<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class City_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }    

    public function get_data_city()
    {
        return $this->db->order_by('id_kota')
                        ->get('kota_tujuan')
                        ->result();
    }

    public function get_data_user()
    {
        $this->db->select ( '*' ); 
        $this->db->from ( 'user' );
        $this->db->where( 'user.id_user',$this->session->userdata('id_user'));
        $query = $this->db->get ('');
        return $query->result ();
    }

    public function get_data_user_by_id($id_user)
    {
        return $this->db->where('id_user', $id_user)
                        ->get('user')
                        ->row();
    }


    public function addjadwal()
    {
        $data = array(
            'jadwal' => $this->input->post('jadwal'),
            'lama_hari' => $this->input->post('nama_hari'),
            
        );

        $this->db->insert('jadwal', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function tanggal()
    {
        $data = array(
            'jadwal' => $this->input->post('jadwal'),
            'id_user' => $this->input->post('id_user'),
        );
        $this->db->insert('jadwal', $data);

    }

    public function get_data_destinasi($id)
    {
        $this->db->select ( '*' ); 
        $this->db->from ( 'destinasi' );
        $this->db->join ( 'kota_tujuan', 'kota_tujuan.id_kota = destinasi.id_kota');
        $this->db->join ( 'paket', 'paket.id_paket = destinasi.id_paket');
        $this->db->where( 'destinasi.id_kota',$id );
        $query = $this->db->get ('');
        return $query->result ();
    }

    public function get_data_tourguide($id)
    {
        $this->db->select ( '*' ); 
        $this->db->from ( 'tourguide' );
        $this->db->join ( 'kota_tujuan', 'kota_tujuan.id_kota = tourguide.id_kota');
        $this->db->where( 'tourguide.id_kota',$id );
        $query = $this->db->get ('');
        return $query->result ();
    }

    public function cari_guide($kode)
	{
        $cart_array = array(
                        'id_tourguide' 	=> $kode,
                        'id_user' => $this->session->userdata('id_user'),
                        'tanggal' => $this->session->userdata('tanggal')
                    );						
        $this->db->insert('pesanan',$cart_array);
        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }     
    }

    // public function cari_paket($kode)
	// {                              
	// 	$data_cart = $this->db->where('paket.id_paket' , $kode)
	// 						  ->get('paket')
	// 						  ->row();
    //     if($data_cart != NULL){
    //         if($data_cart){
    //             $cart_array = array(
    //                 'id_paket' 	=> $data_cart->id_paket,
    //             );						
    //             $this->db->insert('pesanan',$cart_array);
    //             return TRUE;
    //         } else {
    //             return FALSE;
    //         }
    //     } else {
    //         return FALSE;
    //     }
    // }

    public function get_data_order()
    {
        $this->db->select ( '*' ); 
        $this->db->from ( 'pesanan' );
        $this->db->join ( 'tourguide', 'tourguide.id_tourguide = pesanan.id_tourguide');
        $this->db->join ( 'paket', 'paket.id_paket = tourguide.id_paket');
        $this->db->join ( 'user', 'user.id_user = pesanan.id_user');
        $this->db->where( 'pesanan.id_user', $this->session->userdata('id_user'));
        $query = $this->db->get ('');
        return $query->result ();
    }

    public function deletePesanan($id_pesanan)
    {
        $this->db->where('id_pesanan', $id_pesanan)
                 ->delete('pesanan');

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    
    public function tambah_transaksi()
	{
    //insert detail transksi
    foreach ($this->get_data_order() as $order) {
        $data_transaksi = array(
            'id_status' => 2,
            'id_user' => $this->session->userdata('id_user'),
            'id_paket' => $order->id_paket,
            'id_tourguide' => $order->id_tourguide,
            'tanggal' => $order->tanggal
        );
        //memasukan ke tabel detail transaksi
        $this->db->insert('transaksi', $data_transaksi);
        //delete cart inserted to transaksi
        $this->db->where('id_pesanan', $order->id_pesanan)->delete('pesanan');
    }
     return TRUE;
    }


    public function get_data_transaksi()
    {
        $this->db->select ( '*' ); 
        $this->db->from ( 'transaksi' );
        $this->db->join ( 'tourguide', 'tourguide.id_tourguide = transaksi.id_tourguide');
        $this->db->join ( 'user', 'user.id_user = transaksi.id_user');
        $this->db->join ( 'paket', 'paket.id_paket = transaksi.id_paket');
        $this->db->join ( 'status', 'status.id_status = transaksi.id_status');
        $this->db->where( 'transaksi.id_user', $this->session->userdata('id_user'));
        $query = $this->db->get ('');
        return $query->result ();
    }

    public function editUser()
    {
        $data = array(
            'nama_user' => $this->input->post('edit_nama_user'),
            'email' => $this->input->post('edit_email'),
            'telp' => $this->input->post('edit_telp'),
            'alamat' => $this->input->post('edit_alamat'),
            'tgl_lahir' => $this->input->post('edit_tgl_lahir'),
            'password' => $this->input->post('edit_password'),
        );

        $this->db->where('id_user', $this->input->post('edit_id_user'))
                ->update('user', $data);
    
        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_transaksi_by_id($id_transaksi)
    {
        return $this->db->where('id_transaksi', $id_transaksi)
                        ->get('transaksi')
                        ->row();
    }

    public function updateStruk($file, $id_f)
    {
        $data = array(
            'file' => $file['file_name']
        );
        $this->db->where('id_transaksi', $id_f);
        $this->db->update('transaksi', $data);
        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function addTanggal()    
    {
        $data = array(
            'tanggal'  => $this->input->post('tanggal'),
        );
        $this->session->set_userdata($data);
        if($this->session->userdata('tanggal')){
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

/* End of file City_model.php */
