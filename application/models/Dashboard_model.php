<?php class Dashboard_model extends CI_Model
{
    private $table = 'mahasiswa';
    function __construct()
    {
        parent::__construct();
    }

    function total_data()
    {
        $this->db->from($this->table);
        return $this->db->get()->num_rows();
    }
    function total_laki()
    {
        $this->db->from($this->table);
        $this->db->where('jenis_kelamin', 'L');
        return $this->db->get()->num_rows();
    }
    function total_perempuan()
    {
        $this->db->from($this->table);
        $this->db->where('jenis_kelamin', 'P');
        return $this->db->get()->num_rows();
    }
}
