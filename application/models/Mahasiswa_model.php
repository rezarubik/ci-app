<?php

class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
        // result_array() untuk menjadikan array
    }
    public function store()
    {
        $params = [
            "nama" => $this->input->post('nama', true), // true untuk security
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];
        $this->db->insert('mahasiswa', $params);
    }
    public function update()
    {
        $params = [
            "nama" => $this->input->post('nama', true), // true untuk security
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $params);
    }
    public function delete($id)
    {
        // $this->db->where('id', $id); // bisa menggunakan ini
        $this->db->delete('mahasiswa', ['id' => $id]);
    }
    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array(); // row_array untuk mengambil satu baris data
    }
    public function searchMahasiswa()
    {
        // mendapatkan inputan keyword dari form
        $keyword = $this->input->post('keyword', true);
        // Mencari kemiripan dengan atribut name dari inputan
        $this->db->like('nama', $keyword);
        // mencari yg lain menggunakan or_like
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}
