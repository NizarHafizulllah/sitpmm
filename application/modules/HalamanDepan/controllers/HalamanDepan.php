  <?php
  defined('BASEPATH') or exit('No direct script access allowed');
  // Don't forget include/define REST_Controller path

  /**
   *
   * Controller HalamanDepan
   *
   * This controller for ...
   *
   * @package   CodeIgniter
   * @category  Controller CI
   * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
   * @author    Raul Guerrero <r.g.c@me.com>
   * @link      https://github.com/setdjod/myci-extension/
   * @param     ...
   * @return    ...
   *
   */

  class HalamanDepan extends CI_Controller
  {

    public function __construct()
    {
      parent::__construct();
    }

    function index()
    {
      // echo CI_VERSION;
      $this->load->view('HalamanDepanView');
    }
  }


  /* End of file HalamanDepan.php */
  /* Location: ./application/controllers/HalamanDepan.php */
