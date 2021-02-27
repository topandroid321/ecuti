<?php class M_Pegawai extends CI_Model
{
    private $table = 'tbl_user';
    function __construct()
    {
        parent::__construct();
    }

    function select_all()
    {
        $f1 = $this->input->get('f_jeniskelamin');
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('tbl_golongan_ruang','tbl_golongan_ruang.id_gol_ruang = tbl_user.gol_ruang_id');
        $this->db->join('tbl_jabatan','tbl_jabatan.id_jabatan = tbl_user.jabatan_id');
        if ($f1) {
            $this->db->where('jenis_kelamin', $f1);
        }
        return $this->db->get();
    }

    function insert()
    {
        //tangkap parameter
        $nip = $this->input->post('nip');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_pegawai = $this->input->post('jenis_pegawai');
        $agama_id = $this->input->post('agama_id');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $gol_ruang_id = $this->input->post('gol_ruang_id');
        $no_telp = $this->input->post('no_telp');
        $unit_kerja_id = $this->input->post('unit_kerja_id');
        $jabatan_id = $this->input->post('jabatan_id');
        $photo = $this->input->post('photo');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $role_id = $this->input->post('role_id');
        $status_id = $this->input->post('status_id');
        //validasi 
        $this->db->where("nip", $nip);
        $cek = $this->db->get($this->table)->num_rows();
        if ($cek == true) {
            //pesan gagal
            $msg = "<script>alert('NPM ini Sudah ada')</script>";
            $this->session->set_flashdata("pesan", $msg);
            redirect(base_url() . 'C_pegawai/tambah');
            return false;
        }
        //buat array
        $data = array(
            "npm" => $nip,
            "nama_lengkap" => $nama_lengkap,
            "jenis_kelamin" => $jenis_kelamin,
            "tempat_lahir" => $tempat_lahir,
            "tanggal_lahir" => $tanggal_lahir,
            "jenis_pegawai" => $jenis_pegawai,
            "agama_id" => $agama_id,
            "jenis_kelamin" => $jenis_kelamin,
            "gol_ruang_id" => $gol_ruang_id,
            "no_telp" => $no_telp,
            "unit_kerja_id" => $unit_kerja_id,
            "jabatan_id" => $jabatan_id,
            "photo" => $photo,
            "email" => $email,
            "password" => $password,
            "role_id" => $role_id,
            "status_id" => $status_id,
        );
        //proses query
        $this->db->insert($this->table, $data);
        //pesan berhasil
        $msg = "<script>alert('Berhasil disimpan')</script>";
        $this->session->set_flashdata("pesan", $msg);
        redirect(base_url() . 'C_Pegawai');
    }


    function select_by_id($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('id', $id);
        return $this->db->get();
    }

    function update()
    {
        //tangkap parameter
        $id = $this->input->post('id');
        $npm = $this->input->post('npm');
        $npm_asal = $this->input->post('npm_asal');
        $nama = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        //validasi
        $this->db->where("npm!=", $npm_asal);
        $this->db->where("npm", $npm);
        $cek = $this->db->get($this->table)->num_rows();
        if ($cek) {
            //pesan gagal
            $msg = "<script>alert('NPM ini Sudah ada')</script>";
            $this->session->set_flashdata("pesan", $msg);
            redirect(base_url() . 'data_mahasiswa/edit/' . $id);
            return false;
        }
        //buat array
        $data = array(
            "npm" => $npm,
            "nama" => $nama,
            "jenis_kelamin" => $jenis_kelamin,
            "alamat" => $alamat,
            "telepon" => $telepon,
        );
        //proses query
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
        //pesan berhasil
        $msg = "<script>alert('Berhasil diupdate')</script>";
        $this->session->set_flashdata("pesan", $msg);
        redirect(base_url() . 'data_mahasiswa');
    }
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}
