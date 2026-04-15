<?php

class Anggota extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('anggota_model');
    }

    public function index(){
        $data['anggota']= $this->anggota_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan(){
        $data = [
            'no_anggota' => $this->input->post('no_anggota'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'tanggal' => $this->input->post('tanggal'),
            'status' => 'Aktif'
        ];

        $this->anggota_model->insert($data);
        redirect('anggota');
    }

 public function edit($id){
    $data['anggota'] = $this->db->get_where('anggota', ['id' => $id])->row();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('anggota/edit', $data);
    $this->load->view('templates/footer');
}

public function update(){
    $id = $this->input->post('id');

    $data = [
        'nama' => $this->input->post('nama'),
        'telepon' => $this->input->post('telepon'),
        'email' => $this->input->post('email'),
        'alamat' => $this->input->post('alamat'),
    ];

    $this->db->where('id', $id);
    $this->db->update('anggota', $data);

    redirect('anggota');
}

public function hapus($id){
    $this->db->where('id', $id);
    $this->db->delete('anggota');

    redirect('anggota');
}
    }
