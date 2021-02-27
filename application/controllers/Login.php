<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model');
    }
    function _template($data)
    {
        $this->load->view('template_login/main', $data);
    }
    public function index()
    {
        $data['konten'] = 'login';
        $this->_template($data);
    }
    function cek_login()
    {
        $this->login_model->cek_login();
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'login');
    }
}
