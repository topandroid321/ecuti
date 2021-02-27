<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()

    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('dashboard_model');
        if ($this->session->userdata('id') == '' && $this->session->userdata('hak_akses') != 'Administrator') {
            redirect(base_url() . 'login/logout');
        }
    }
    function _template($data)
    {
        $this->load->view('template/main', $data);
    }
    public function index()
    {
        $data['total_data'] = $this->dashboard_model->total_data();
        $data['total_laki'] = $this->dashboard_model->total_laki();
        $data['total_perempuan'] = $this->dashboard_model->total_perempuan();
        $data['konten'] = 'dashboard';
        $this->_template($data);
    }
}
