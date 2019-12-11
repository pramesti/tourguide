<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_Data extends CI_Model {

    public function loginAdmin()
    {

        $result = $this->db->where('email', $this->input->post('email'))->where('password', $this->input->post('password'))->get('admin');
        if ($result->num_rows()) {
            
            $admin = array(
                'id_admin' => $result->row()->id_admin,
                'nama' => $result->row()->nama,
                'email' => $result->row()->email,
                'password' => $result->row()->password,
                'logged' => TRUE
            );

            $this->session->set_userdata( $admin );           
            return true;
        } else {
            return false;
        }
    }

    

    // ----------------------------------------------------------------------
    // USER
    public function getUser()
    {
        $result = $this->db->get('User')->result();
        return $result;
    }

    public function get_data_user_by_id($id_user)
    {
        return $this->db->where('id_user', $id_user)
                        ->get('user')
                        ->row();
    }

    public function editUser()
    {
        $data = array(
            'nama_user'         => $this->input->post('edit_nama_user'),
            'email'          => $this->input->post('edit_email'),
            'telp'          => $this->input->post('edit_telp'),
            'alamat'          => $this->input->post('edit_alamat'),
            'tgl_lahir'          => $this->input->post('edit_tgl_lahir'),
            'password'          => $this->input->post('edit_password'),
        );

        $this->db->where('id_user', $this->input->post('edit_id_user'))
                ->update('user', $data);
    
        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    

 


    // ----------------------------------------------------------------------
    // DESTINASI
    public function getDestinasi()
    {
        $this->db->select ( '*' ); 
        $this->db->from ( 'destinasi' );
        $this->db->join ( 'kota_tujuan', 'kota_tujuan.id_kota = destinasi.id_kota');
        $this->db->join ( 'paket', 'paket.id_paket = destinasi.id_paket');
        $query = $this->db->get ('');
        return $query->result ();
    }

    public function get_data_destinasi_by_id($id_tempat)
    {
        return $this->db->where('id_tempat', $id_tempat)
                        ->get('destinasi')
                        ->row();
    }

    public function editDestinasi()
    {
        $data = array(
            'id_kota'         => $this->input->post('edit_id_kota'),
            'id_paket'          => $this->input->post('edit_id_paket'),
            'nama_wisata'          => $this->input->post('edit_nama_wisata'),
            'deskripsi'          => $this->input->post('edit_deskripsi'),
            'lokasi'          => $this->input->post('edit_lokasi'),
        );

        $this->db->where('id_tempat', $this->input->post('edit_id_tempat'))
                ->update('destinasi', $data);
    
        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function addDestinasi($cover)
    {
        $data = array(
            'id_kota'         => $this->input->post('id_kota'),
            'id_paket'          => $this->input->post('id_paket'),
            'nama_wisata'          => $this->input->post('nama_wisata'),
            'deskripsi'          => $this->input->post('deskripsi'),
            'lokasi'          => $this->input->post('lokasi'),
            'cover'          => $cover['file_name']
        );

        $this->db->insert('destinasi', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function deleteDestinasi($id_tempat)
    {
        $this->db->where('id_tempat', $id_tempat)
                 ->delete('destinasi');

                 if($this->db->affected_rows() > 0){
                     return TRUE;
                 } else {
                     return FALSE;
                 }
    }

    




    // ----------------------------------------------------------------------
    // PAKET

    public function getPaket()
    {
        $result = $this->db->get('paket')->result();
        return $result;
    }

    public function get_data_paket_by_id($id_paket)
    {
        return $this->db->where('id_paket', $id_paket)
                        ->get('paket')
                        ->row();
    }

    public function editPaket()
    {
        $data = array(
            'nama_paket' 	    => $this->input->post('edit_nama_paket'),
            'harga' 		    => $this->input->post('edit_harga'),
            'lama_hari' 		    => $this->input->post('edit_lama_hari'),
        );

        $this->db->where('id_paket', $this->input->post('edit_id_paket'))
                ->update('paket', $data);
    
        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function addPaket()
    {
        $data = array(
            'nama_paket'         => $this->input->post('nama_paket'),
            'harga'             => $this->input->post('harga'),
            'lama_hari' 		    => $this->input->post('lama_hari'),
        );

        $this->db->insert('paket', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function deletePaket($id_paket)
    {
        $this->db->where('id_paket', $id_paket)
                 ->delete('paket');

                 if($this->db->affected_rows() > 0){
                     return TRUE;
                 } else {
                     return FALSE;
                 }
    }

 
   

    // ----------------------------------------------------------------------
    // KOTA

    public function getKota()
    {
        $result = $this->db->get('kota_tujuan')->result();
        return $result;
    }

    public function get_data_kota_by_id($id_kota)
    {
        return $this->db->where('id_kota', $id_kota)
                        ->get('kota_tujuan')
                        ->row();
    }

    public function editKota()
    {
        $data = array(
            'nama_kota'          => $this->input->post('edit_nama_kota'),
        );

        $this->db->where('id_kota', $this->input->post('edit_id_kota'))
                ->update('kota_tujuan', $data);
    
        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function addKota($photo)
    {
        $data = array(
            'nama_kota'          => $this->input->post('nama_kota'),
            'photo'          => $photo['file_name']
        );

        $this->db->insert('kota_tujuan', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function deleteKota($id_kota)
    {
        $this->db->where('id_kota', $id_kota)
                 ->delete('kota_tujuan');

                 if($this->db->affected_rows() > 0){
                     return TRUE;
                 } else {
                     return FALSE;
                 }
    }




    // ----------------------------------------------------------------------
    // TRANSAKSI
    
    public function getTransaksi()
    {
        $this->db->select ( '*' ); 
        $this->db->from ( 'transaksi' );
        $this->db->join ( 'tourguide', 'tourguide.id_tourguide = transaksi.id_tourguide');
        $this->db->join ( 'user', 'user.id_user = transaksi.id_user');
        $this->db->join ( 'jadwal', 'jadwal.id_jadwal = transaksi.id_jadwal');
        $this->db->join ( 'paket', 'paket.id_paket = transaksi.id_paket');
        $this->db->join ( 'status', 'status.id_status = transaksi.id_status');
        $this->db->join ( 'struk', 'struk.id_struk = transaksi.id_struk', 'left');
        $this->db->where('status.id_status = 2  ');
        $query = $this->db->get ('');
        return $query->result ();
    }


    public function getTerverif()
    {
        $this->db->select ( '*' ); 
        $this->db->from ( 'transaksi' );
        $this->db->join ( 'tourguide', 'tourguide.id_tourguide = transaksi.id_tourguide');
        $this->db->join ( 'user', 'user.id_user = transaksi.id_user');
        $this->db->join ( 'jadwal', 'jadwal.id_jadwal = transaksi.id_jadwal');
        $this->db->join ( 'paket', 'paket.id_paket = transaksi.id_paket');
        $this->db->join ( 'status', 'status.id_status = transaksi.id_status');
        $this->db->join ( 'struk', 'struk.id_struk = transaksi.id_struk', 'left');
        $this->db->where('status.id_status = 1  ');
        $query = $this->db->get ('');
        return $query->result ();
    }


    public function verifikasi()
    {
        $data = array(
            'id_status'	=> $this->input->post('edit_id_status')
        );

        $this->db->where('id_transaksi', $this->input->post('edit_id_transaksi'))
                ->update('transaksi', $data);
    
        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }


    public function get_data_transaksi_by_id($id_transaksi)
    {
        return $this->db->where('id_transaksi', $id_transaksi)
                        ->get('transaksi')
                        ->row();
    }






    // ----------------------------------------------------------------------
    // TOURGUIDE

    public function getTourguide()
    {
        return $this->db
        ->join('kota_tujuan','kota_tujuan.id_kota = tourguide.id_kota')
        ->get('tourguide')->result();
    }


    public function addGuide($foto)
    {
        $data = array(
            'nama'         => $this->input->post('nama'),
            'kemampuan'          => $this->input->post('kemampuan'),
            'telp'         => $this->input->post('telp'),
            'id_kota'  => $this->input->post('id_kota'),
            'foto'         => $foto['file_name']
        );

        $this->db->insert('tourguide', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete($id_tourguide)
    {
        $this->db->where('id_tourguide', $id_tourguide)
                 ->delete('tourguide');

                 if($this->db->affected_rows() > 0){
                     return TRUE;
                 } else {
                     return FALSE;
                 }
    }

    public function get_data_tourguide_by_id($id_tourguide)
    {
        return $this->db->where('id_tourguide', $id_tourguide)
                        ->get('tourguide')
                        ->row();
    }

    public function editGuide()
    {
        $data = array(
            'nama' 	    => $this->input->post('edit_nama'),
            'kemampuan' 		    => $this->input->post('edit_kemampuan'),
            'telp'			=> $this->input->post('edit_telp'),
            'id_kota'	=> $this->input->post('edit_id_kota')
        );

        $this->db->where('id_tourguide', $this->input->post('edit_id_tourguide'))
                ->update('tourguide', $data);
    
        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }



    public function getStatus()
    {
        $result = $this->db->get('status')->result();
        return $result;
    }
}

/* End of file ModelName.php */
