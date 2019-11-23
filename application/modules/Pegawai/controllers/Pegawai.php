<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends AdminController
{

  public function __construct()
  {
    parent::__construct();
    $this->controller = get_class($this);
  }

  function index()
  {
    $data = array();
    $data['title'] = "Pegawai";
    $content = $this->load->view($this->controller . "View", $data, true);
    $this->set_title($data['title']);
    $this->set_content($content);
    $this->render();
  }
}
/* End of file HalamanDepan.php */
/* Location: ./application/controllers/HalamanDepan.php */
