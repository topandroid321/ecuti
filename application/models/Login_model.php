<?php class Login_model extends CI_Model
{
    private $table = 'pengguna';
    function __construct()
    {
        parent::__construct();
    }
    function cek_login()
    {
        //tangkap parameter
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        //cek di query
        $this->db->where("username", $user);
        $this->db->where("password", md5($pass));
        $loginAdmin = $this->db->get($this->table);
        if ($loginAdmin->num_rows() == 1) {
            //jika berhasil 
            $val_login = $loginAdmin->row();
            //buat session
            $array = array(
                "id" => $val_login->id,
                "hak_akses" => $val_login->hak_akses,
                "username" => $val_login->username,
            );
            $this->session->set_userdata($array);
            $sesi = $this->session->userdata("hak_akses");
            $this->validasi_session($sesi);
        } else {
            //jika gagal
            $msg = "<script>alert('Login Gagal, Harap periksa kembali username dan password Anda !')</script>";
            $this->session->set_flashdata("pesan", $msg);
            redirect(base_url() . 'login');
        }
    }
    function validasi_session($id)
    {
        $sesi = $this->session->userdata("hak_akses");
        if ($sesi == 'Administrator') {
            redirect(base_url() . 'dashboard');
        }
        if ($sesi == 'Operator') {
            redirect(base_url() . 'data_mahasiswa');
        }
        if (!$sesi) {
            redirect("login/logout");
        }
    }
}
