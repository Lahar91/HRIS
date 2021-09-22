<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_karyawan');
        $this->load->model('m_devisi');
        
    }
    
    public function index()
    {
        $data = array(
            'title' => 'Karyawan',
            'karyawan' => $this->m_karyawan->get_all_data(),
            'isi' =>'admin/karyawan'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
        
    }

    public function add()
    {
        $this->form_validation->set_rules(
            'nama_karyawan',
            'Nama Karang',
            'required',
            array('required' => '%s Harus Diisi !!!')
        );

        $this->form_validation->set_rules(
            'tmpt_lahir',
            'Tempat Lahir',
            'required',
            array('required' => '%s Harus Diisi !!!')
        );

        $this->form_validation->set_rules(
            'tgl_lahir',
            'Tanggal Lahir',
            'required',
            array('required' => '%s Harus Diisi !!!')
        );

        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required',
            array('required' => '%s Harus Diisi !!!')
        );

        $this->form_validation->set_rules(
            'no_hp',
            'Nomor Hp',
            'required',
            array('required' => '%s Harus Diisi !!!')
        );

        $this->form_validation->set_rules(
            'email',
            'email',
            'required',
            array('required' => '%s Harus Diisi !!!')
        );


        $this->form_validation->set_rules(
            'id_devisi',
            'id_devisi',
            'required',
            array('required' => '%s Harus di pilih !!!')
        );

        $this->form_validation->set_rules(
            'password',
            'password',
            'required',
            array('required' => '%s Harus Diisi !!!')
        );

        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Tambah Karyawan',
                'karyawan' => $this->m_karyawan->get_all_data(),
                'devisi' => $this->m_devisi->get_all_data(),
                'isi' => 'admin/add_karyawan'
            );
            $this->load->view('layout/wrapper', $data, FALSE);
        }else {
            $data = array(
                'nama_karyawan' => $this->input->post('nama_karyawan'),
                'tmpt_lahir' => $this->input->post('tmpt_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'id_devisi' => $this->input->post('id_devisi'),
                'job'=> $this->input->post('job'),
                'password' => $this->input->post('password')
            );
            $this->m_karyawan->add($data);
            $this->session->set_flashdata('pesan', 'Data Karaywan Berhasil Di buat');
            redirect('karyawan');
            
        }

        
    }

    public function edit($id_karyawan = null)
    {
        $data = array(
            'id_karyawan' => $id_karyawan,
            'nama_karyawan' => $this->input->post('nama_karyawan'),
            'tmpt_lahir' => $this->input->post('tmpt_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'id_devisi' => $this->input->post('id_devisi'),
            'job'=> $this->input->post('job'),
            'password' => $this->input->post('password')
        );
        $this->m_devisi->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Ubah');
        redirect('devisi');    }

}

/* End of file karyawan.php */

?>