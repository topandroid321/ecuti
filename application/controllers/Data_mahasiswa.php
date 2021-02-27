<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Data_mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('data_mahasiswa_model');
        if ($this->session->userdata('id') == '' || $this->session->userdata('hak_akses') != 'Operator') {
            redirect(base_url() . 'login/logout');
        }
    }
    function _template($data)
    {
        $this->load->view('template/main', $data);
    }
    public function index()
    {
        $data['daftar_mahasiswa'] = $this->data_mahasiswa_model->select_all()->result();
        $data['konten'] = 'data_mahasiswa/list_data';
        $this->_template($data);
    }

    public function tambah()
    {
        $data['konten'] = 'data_mahasiswa/tambah_data';
        $this->_template($data);
    }
    public function proses_simpan()
    {
        $this->data_mahasiswa_model->insert();
    }

    public function edit($id)
    {
        $data['mahasiswa'] = $this->data_mahasiswa_model->select_by_id($id)->row();
        $data['konten'] = 'data_mahasiswa/edit_data';
        $this->_template($data);
    }
    public function proses_update()
    {
        $this->data_mahasiswa_model->update();
    }

    public function delete($id)
    {
        $this->data_mahasiswa_model->delete($id);
        //pesan berhasil
        $msg = "<script>alert('Berhasil di delete')</script>";
        $this->session->set_flashdata("pesan", $msg);
        redirect(base_url() . 'data_mahasiswa');
    }
}
