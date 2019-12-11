<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
    }
    

    public function insert()
    {
        $user = array(
            'id_user'       => NULL,
            'nama_user'     => $this->input->post('nama_user'),
            'email'         => $this->input->post('email'),
            'telp'         => $this->input->post('telp'),
            'alamat'         => $this->input->post('alamat'),
            'tgl_lahir'         => $this->input->post('tgl_lahir'),
            'password'      => $this->input->post('password')
        );

        $this->db->insert('user', $user);

        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

/* End of file Register_model.php */
