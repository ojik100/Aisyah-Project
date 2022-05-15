<?php
class Login_models extends CI_Model{
    //cek nip dan password dosen
    function auth($nip,$password){
        $query=$this->db->query("SELECT * FROM users WHERE nip='$nip' AND password='$password' LIMIT 1");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    // function auth_mahasiswa($username,$password){
    //     $query=$this->db->query("SELECT * FROM mahasiswa WHERE nim='$username' AND pass=MD5('$password') LIMIT 1");
    //     return $query;
    // }
 
}
