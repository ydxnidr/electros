<?php
class User_model extends CI_Model {

    public function generateUserID($role_id, $tahun, $bulan, $nomor_urut) {
        $roleIdStr = str_pad($role_id, 2, '0', STR_PAD_LEFT);
        $tahunStr = substr($tahun, -2);
        $bulanStr = str_pad($bulan, 2, '0', STR_PAD_LEFT);
        $nomorUrutStr = str_pad($nomor_urut, 2, '0', STR_PAD_LEFT);
        
        return $roleIdStr . $tahunStr . $bulanStr . $nomorUrutStr;
    }

    public function getLastNomorUrut($tahun, $bulan) {
        $this->db->select('userID');
        $this->db->like('userID', substr($tahun, -2) . str_pad($bulan, 2, '0', STR_PAD_LEFT), 'after');
        $this->db->order_by('userID', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            $lastUserID = $query->row()->userID;
            return (int)substr($lastUserID, -2);
        } else {
            return 0;
        }
    }

    public function createUser($role_id, $tahun, $bulan, $nama_lengkap, $username, $email, $password) {
        $lastNomorUrut = $this->getLastNomorUrut($tahun, $bulan);
        $nomor_urut = $lastNomorUrut + 1;
        $userID = $this->generateUserID($role_id, $tahun, $bulan, $nomor_urut);
        $data = array(
            'userID' => $userID,
            'nama_lengkap' => $nama_lengkap,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'role_id' => $role_id,
            'created_date' => date('Y-m-d H:i:s'),
            'last_login' => date('Y-m-d H:i:s')
        );
        $this->db->insert('user', $data);
    }

}
