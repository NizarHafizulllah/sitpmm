<?php

class LoginModel extends  CI_Model
{   
    function __construct(){
        parent::__construct();
      }
    
      function cek_login($username, $password)
    {
        $this->db->select('tp.*')->from('t_pegawai tp');
        // $this->db->join('mst_role rl', 'rl.id=u.id_role');
        $this->db->where("tp.username", $username);
        $this->db->where("tp.password", $password);
        return $this->db->get();
    }
}



?>