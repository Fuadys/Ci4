<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pemesanan;

class PemesananController extends BaseController
{
    public $pemesanan;

    public function __construct()
    {
        $this->pemesanan = new Pemesanan();
    }
    public function index()
    {
        $data = $this->pemesanan->findAll();
        // dd($data);
        return view('pemesanan/index', compact('data'));
    }

    public function tambah()
    {
        return view('pemesanan/tambah');
    }

    public function tambahpemesanan()
    {
        $this->pemesanan->insert([
            'id' => $this->request->getPost('id'),
            'tanggal_pemesanan' => $this->request->getPost('tgl'),
            'jumlah' => $this->request->getPost('jumlah'),
            'Total_harga' => $this->request->getPost('harga'),
            'id_film' => $this->request->getPost('idfilm'),
            'id_customer' => $this->request->getPost('idcustomer'),
        ]);

        return redirect('pemesanan');
    }

    public function editpemesanan($id)
    {
        $data = $this->pemesanan->find($id);
        // dd($data);
        return View('pemesanan/edit', compact('data'));
    }

    public function updatepemesanan($id)
    {

        $this->pemesanan->update($id, [
            'id' => $this->request->getPost('id'),
            'tanggal_pemesanan' => $this->request->getPost('tgl'),
            'jumlah' => $this->request->getPost('jumlah'),
            'Total_harga' => $this->request->getPost('harga'),
            'id_film' => $this->request->getPost('idfilm'),
            'id_customer' => $this->request->getPost('idcustomer'),
        ]);

        return redirect('pemesanan');
    }

    public function deletepemesanan($id)
    {

        $this->pemesanan->delete($id);


        return redirect('pemesanan');
    }

}
