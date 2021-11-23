<?php

namespace App\Controllers;

use App\Models\Customer;
use App\Controllers\BaseController;

class CustomerController extends BaseController
{
    public $customer;

    public function __construct()
    {
        $this->customer = new Customer();
    }
    public function index()
    {
        $data = $this->customer->findAll();
        // dd($data);
        return view('customer/index', compact('data'));
    }

    public function tambah()
    {
        return view('customer/tambah');
    }

    public function tambahcustomer()
    {
        $this->customer->insert([
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jk'),
            'telepon' => $this->request->getPost('telepon'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
        ]);

        return redirect('customer');
    }

    public function editcustomer($id)
    {
        $data = $this->customer->find($id);
        // dd($data);
        return View('customer/edit', compact('data'));
    }

    public function updatecustomer($id)
    {

        $this->customer->update($id, [
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jk'),
            'telepon' => $this->request->getPost('telepon'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
        ]);

        return redirect('customer');
    }

    public function deletecustomer($id)
    {

        $this->customer->delete($id);


        return redirect('customer');
    }
    public function info()
    {
        $db = \config\Database::connect();
        $builder = $db->table('customer',);
        $builder->select('*');
        $builder->join('pemesanan', 'customer.id=pemesanan.id_customer');
        $query = $builder->get();
        $data = $query->getResult();
        return view ('customer/info', compact('data')); 
    }

}
