<?php

class CoreModel extends  CI_Model
{   
    function __construct(){
        parent::__construct();
      }
    
      function get_menu($id_role)
    {
        $this->db->select('mn.menu, mn.icon')->from('t_akses ta');
        $this->db->join('m_menu mn', 'mn.id=ta.id_menu');
        $this->db->where('ta.id_role', $id_role);
        $this->db->group_by('mn.menu');
        $this->db->order_by('mn.id', 'ASC');
        
        return $this->db->get();
    }

    function get_sub_menu($id_role, $menu)
    {
        $this->db->select('mn.sub_menu, mn.url, mn.icon')->from('t_akses ta');
        $this->db->join('m_menu mn', 'mn.id=ta.id_menu');
        $this->db->where('ta.id_role', $id_role);
        $this->db->where('mn.menu', $menu);
        
        return $this->db->get();
    }


    function cek_akses($url, $id_role)
    {
        $this->db->select('mn.sub_menu, mn.url, mn.icon')->from('t_akses ta');
        $this->db->join('m_menu mn', 'mn.id=ta.id_menu');
        $this->db->where('ta.id_role', $id_role);
        $this->db->where('mn.url', $url);
        $row = $this->db->get()->num_rows();

        if ($row>=1) {
            return true;
        }else{
            return false;
        }
        
    }



}



?>