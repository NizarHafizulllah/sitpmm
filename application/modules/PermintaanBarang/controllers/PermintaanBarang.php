<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PermintaanBarang extends AdminController
{
    
  public function __construct()
  {
    parent::__construct();
    $this->controller = get_class($this);
    // echo $this->controller;
    $userdata = $this->session->userdata('pengguna');
    // show_array($userdata);
    // exit();
    $cek = $this->cm->cek_akses($this->controller, $userdata['akses']);  
    if ($cek == false) {
      redirect(site_url('DashboardAdmin'));
    }
  }

 function index()
  {
    $data = array();
		$data['title'] = "Permintaan Barang";
		$content = $this->load->view($this->controller."View",$data,true);
		$this->set_title($data['title']);
		$this->set_content($content);
		$this->render();
    
  }


  function baru(){

    if ($this->session->userdata('temp_id')==FALSE)
    {
        $session = md5(date('Ymdhis'));
    }

    $data = array();
    $data['title'] = "Permintaan Barang";
    $content = $this->load->view($this->controller."FormView",$data,true);
    $this->set_title($data['title']);
    $this->set_content($content);
    $this->render();



  }

}

