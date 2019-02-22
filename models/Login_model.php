<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login_model extends CI_Model{
    public function login(){
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');

        $query=$this->db->where('nama', $nama)
                        ->where('nip', $nip)
                        ->get('admin');

        if ($query->num_rows()>0) {
            $data = array(
                'nama' => $nama,
                'logged_in' => TRUE
            );

            $this->session->karyawan($data);
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
    ?>