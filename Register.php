<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        return view('register');  // Menampilkan form registrasi
    }

    public function save()
    {
        // Ambil data dari form
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT); // Password hashing
        $role_id = $this->request->getPost('role_id'); // ID untuk role Super Admin

        // Validasi data (untuk demonstrasi, bisa ditambahkan lebih lanjut)
        if (empty($nama) || empty($email) || empty($password)) {
            return redirect()->back()->with('error', 'Semua data harus diisi');
        }

        // Simpan data ke database
        $userModel = new UserModel();
        $userModel->save([
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'role_id' => $role_id
        ]);

        // Redirect ke login setelah berhasil registrasi
        return redirect()->to('/login')->with('message', 'Registrasi berhasil, silakan login.');
    }
}
