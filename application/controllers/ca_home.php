<?php
/**
 *
 */
class c_tampildetail extends CI_Controller
{
  function __construct(){
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->model('m_login');
  }

  function index()
  {
    $data = $this->session->userdata('username');
    $this->load->view('va_home', $data);
  }
}
 ?>
