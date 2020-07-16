<?php

namespace App\Controllers;

use App\Models\M_user;

class User extends BaseController
{
   public function index()
   {
      if (session()->get('nama') == '') {
         session()->setFlashdata('gagal', 'Anda belum login');
         return redirect()->to(base_url('login'));
      }

      $model = new M_user();
      $data['user'] = $model->get_user();

      return view('view', $data);
   }

   public function tambahdata()
   {
      echo view('view_tambah');
   }

   public function save()
   {
      $model = new M_user();
      $data = [
         'nama' => $this->request->getPost('nama'),
         'email' => $this->request->getPost('email'),
         'pass' => $this->request->getPost('pass')
      ];
      $model->saveUser($data);
      return redirect()->to('/user');
   }

   public function delete($id)
   {
      $model = new M_user();
      $model->deleteUser($id);
      return redirect()->to('/user');
   }

   public function edit($id)
   {
      $model = new M_user();
      $data['user'] = $model->get_user($id)->getRow();
      return view('view_edit', $data);
   }

   public function updateData()
   {
      $model = new M_user();
      $id = $this->request->getPost('id');
      $data = [
         'nama' => $this->request->getPost('nama'),
         'email' => $this->request->getPost('email')
      ];
      $model->updateUser($data, $id);
      return redirect()->to('/user');
   }
   //--------------------------------------------------------------------

}
