<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Mahasiswa extends Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    // Tampilkan semua data
    public function index()
    {
        $query = $this->db->query("SELECT * FROM mahasiswa ORDER BY id DESC");
        $data['mahasiswa'] = $query->getResult();
        return view('mahasiswa_view', $data);
    }

    // Tampilkan detail
    public function detail($id)
    {
        $query = $this->db->query("SELECT * FROM mahasiswa WHERE id = ?", [$id]);
        $data['mhs'] = $query->getRow();
        return view('mahasiswa_detail', $data);
    }

    // Form tambah
    public function create()
    {
        return view('mahasiswa_create');
    }

    // Simpan data
    public function store()
    {
        $nim  = $this->request->getPost('nim');
        $nama = $this->request->getPost('nama');
        $umur = $this->request->getPost('umur');

        $this->db->query(
            "INSERT INTO mahasiswa (nim, nama, umur) VALUES (?, ?, ?)",
            [$nim, $nama, $umur]
        );

        return redirect()->to('/mahasiswa');
    }

    // Form edit
    public function edit($id)
    {
        $query = $this->db->query("SELECT * FROM mahasiswa WHERE id = ?", [$id]);
        $data['mhs'] = $query->getRow();
        return view('mahasiswa_edit', $data);
    }

    // Update data
    public function update($id)
    {
        $nim  = $this->request->getPost('nim');
        $nama = $this->request->getPost('nama');
        $umur = $this->request->getPost('umur');

        $this->db->query(
            "UPDATE mahasiswa SET nim = ?, nama = ?, umur = ? WHERE id = ?",
            [$nim, $nama, $umur, $id]
        );

        return redirect()->to('/mahasiswa');
    }

    // Hapus data
    public function delete($id)
    {
        $this->db->query("DELETE FROM mahasiswa WHERE id = ?", [$id]);
        return redirect()->to('/mahasiswa');
    }

    // Pencarian
    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $query = $this->db->query("SELECT * FROM mahasiswa WHERE nim LIKE ? OR nama LIKE ?", ["%$keyword%", "%$keyword%"]);
        $data['mahasiswa'] = $query->getResult();
        return view('mahasiswa_view', $data);
    }
}
