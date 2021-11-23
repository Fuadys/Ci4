<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Film;

class FilmController extends BaseController
{
    public $film;

    public function __construct()
    {
        $this->film = new Film();
    }
    public function index()
    {
        $data = $this->film->findAll();
        // dd($data);
        return view('film/index', compact('data'));
    }

    public function tambah()
    {
        return view('film/tambah');
    }

    public function tambahfilm()
    {
        $this->film->insert([
            'id' => $this->request->getPost('id'),
            'judul' => $this->request->getPost('judul'),
            'genre' => $this->request->getPost('genre'),
            'kategori' => $this->request->getPost('kategori'),
            'tayang' => $this->request->getPost('tayang'),
            'durasi' => $this->request->getPost('durasi'),
        ]);

        return redirect('film');
    }

    public function editfilm($id)
    {
        $data = $this->film->find($id);
        // dd($data);
        return View('film/edit', compact('data'));
    }

    public function updatefilm($id)
    {

        $this->film->update($id, [
            'id' => $this->request->getPost('id'),
            'judul' => $this->request->getPost('judul'),
            'genre' => $this->request->getPost('genre'),
            'kategori' => $this->request->getPost('kategori'),
            'tayang' => $this->request->getPost('tayang'),
            'durasi' => $this->request->getPost('durasi'),
        ]);

        return redirect('film');
    }

    public function deletefilm($id)
    {

        $this->film->delete($id);


        return redirect('film');
    }
}
