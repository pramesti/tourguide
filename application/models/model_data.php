<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_data extends CI_Model {

    public function loginUser()
    {

        $result = $this->db->where('email', $this->input->post('email'))->where('password', $this->input->post('password'))->get('user');
        if ($result->num_rows()) {
            
            $user = array(
                'id_user' => $result->row()->id_user,
                'nama_user' => $result->row()->nama_user,
                'email' => $result->row()->email,
                'password' => $result->row()->password,
                'logged_in' => TRUE
            );

            $this->session->set_userdata( $user );           
            return true;
        } else {
            return false;
        }
    }


}

/* End of file model_data.php */