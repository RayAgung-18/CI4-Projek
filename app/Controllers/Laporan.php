<?php

namespace App\Controllers;

use App\Models\LaporanModel;
use CodeIgniter\Controller;

class Laporan extends Controller
{
    public function index()
    {
        $model = new LaporanModel();
        $data['laporan'] = $model->findAll();
        return view('laporan/index', $data);
    }

    public function create()
    {
        return view('laporan/create');
    }

    public function store()
    {
        $model = new LaporanModel();
        $data = [
            'nama_jalan' => $this->request->getPost('nama_jalan'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'koordinat' => $this->request->getPost('koordinat')
        ];

        // Upload foto (jika ada)
        $file = $this->request->getFile('foto');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move('uploads', $fileName);
            $data['foto'] = $fileName;
        }

        $model->insert($data);
        return redirect()->to('/laporan');
    }

    public function edit($id)
    {
        $model = new LaporanModel();
        $data['laporan'] = $model->find($id);
        return view('laporan/edit', $data);
    }

    public function update($id)
    {
        $model = new LaporanModel();
        $data = [
            'nama_jalan' => $this->request->getPost('nama_jalan'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'koordinat' => $this->request->getPost('koordinat')
        ];
        $model->update($id, $data);
        return redirect()->to('/laporan');
    }

    public function delete($id)
    {
        $model = new LaporanModel();
        $model->delete($id);
        return redirect()->to('/laporan');
    }
}
