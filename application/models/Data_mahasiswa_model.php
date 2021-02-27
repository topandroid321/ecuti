<?php class Data_mahasiswa_model extends CI_Model
{
    private $table = 'mahasiswa';
    function __construct()
    {
        parent::__construct();
    }

    function select_all()
    {
        $f1 = $this->input->get('f_jeniskelamin');
        $this->db->select('*');
        $this->db->from($this->table);
        if ($f1) {
            $this->db->where('jenis_kelamin', $f1);
        }
        return $this->db->get();
    }

    function insert()
    {
        //tangkap parameter
        $npm = $this->input->post('npm');
        $nama = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        //validasi 
        $this->db->where("npm", $npm);
        $cek = $this->db->get($this->table)->num_rows();
        if ($cek == true) {
            //pesan gagal
            $msg = "<script>alert('NPM ini Sudah ada')</script>";
            $this->session->set_flashdata("pesan", $msg);
            redirect(base_url() . 'data_mahasiswa/tambah');
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
        $this->db->insert($this->table, $data);
        //pesan berhasil
        $msg = "<script>alert('Berhasil disimpan')</script>";
        $this->session->set_flashdata("pesan", $msg);
        redirect(base_url() . 'data_mahasiswa');
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
