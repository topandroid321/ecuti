<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class C_Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_Pegawai');
    }
    function _template($data)
    {
        $this->load->view('template/main', $data);
    }
    public function index()
    {
        $data['daftar_pegawai'] = $this->M_Pegawai->select_all()->result();
        $data['konten'] = 'data_pegawai/list_data';
        $this->_template($data);
    }

    public function tambah()
    {
        $data['konten'] = 'data_pegawai/tambah_data';
        $this->_template($data);
    }
    public function proses_simpan()
    {
        $this->M_pegawai->insert();
    }

    public function edit($id)
    {
        $data['mahasiswa'] = $this->M_pegawai->select_by_id($id)->row();
        $data['konten'] = 'data_pegawai/edit_data';
        $this->_template($data);
    }
    public function proses_update()
    {
        $this->M_pegawai->update();
    }

    public function delete($id)
    {
        $this->M_Pegawai->delete($id);
        //pesan berhasil
        $msg = "<script>alert('Berhasil di delete')</script>";
        $this->session->set_flashdata("pesan", $msg);
        redirect(base_url() . 'data_mahasiswa');
    }
}
