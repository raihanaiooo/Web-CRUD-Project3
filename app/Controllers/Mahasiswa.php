<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use CodeIgniter\Controller;

class Mahasiswa extends Controller
{
    protected $mahasiswa;

    public function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
    }

    // Tampilkan semua data
    public function index()
    {
        $data['mhs'] = $this->mahasiswa->orderBy('nim', 'ASC')->findAll();
        return view('mahasiswa_view', $data);
    }

    // Tampilkan detail
    public function detail($id)
    {
        $data['mhs'] = $this->mahasiswa->find($id);
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
       $this->mahasiswa->insert([
        'nim' => $this->request->getPost('nim'),
        'nama' => $this->request->getPost('nama'),
        'umur' => $this->request->getPost('umur'),
       ]);
        return redirect()->to('/mahasiswa');
    }

    // Form edit
    public function edit($id)
    {
        $data['mhs'] = $this->mahasiswa->find($id);
        return view('mahasiswa_edit', $data);
    }

    // Update data
    public function update($id)
    {
        $this->mahasiswa->update($id, [
        'nim' => $this->request->getPost('nim'),
        'nama' => $this->request->getPost('nama'),
        'umur' => $this->request->getPost('umur'),
        ]);

        return redirect()->to('/mahasiswa');
    }

    // Hapus data
    public function delete($id)
    {
        $this->mahasiswa->delete($id);
        return redirect()->to('/mahasiswa');
    }

    // Pencarian
    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $data['mhs'] = $this->mahasiswa
            ->like('nim', $keyword)
            ->orLike('nama', $keyword)
            ->findAll();
        return view('mahasiswa_view', $data);
    }
}
