<?php
/**
 * Kelas UserController
 *
 * Controller untuk menangani aksi yang berhubungan dengan pengguna.
 */
class UserController extends CI_Controller {

	/**
	 * Membuat pengguna baru.
	 *
	 * Metode ini menangani pembuatan pengguna baru dengan mengumpulkan data input,
	 * memuat User_model, dan memanggil metode createUser.
	 */
	public function create() {
		// ID peran untuk pengguna baru 01 = Admin, 02 = User
		$role_id = '01';
		
		// Tahun saat ini
		$tahun = date('Y');
		
		// Bulan saat ini
		$bulan = date('m');
		
		$nama_lengkap = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		// Memanggil metode createUser untuk menyimpan pengguna baru
		$this->User_model->createUser($role_id, $tahun, $bulan, $nama_lengkap, $username, $email, $password);
	}
}
