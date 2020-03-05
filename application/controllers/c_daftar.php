<?php
/**
 *
 */
class c_daftar extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->model('m_daftar');
  }
  function index(){
    $data['title'] = 'Login Admin';
    $data['loginheader'] = 'Login';
    $data['gagal'] = '';

    $this->load->model('m_daftar');
    $this->load->view('v_daftar', $data);
  }
  function terima()
  {
    $datanew2 = array ('nama' => $_POST['nama'],
                       'id_nya' => $_POST['username'],
                       'email' => $_POST['email'],
                       'password' => $_POST['password'],
                       'no_telp' => $_POST['no_telp']);
    $this->load->model('m_daftar');
    $this->m_daftar->adddaftar($datanew2);
		redirect('c_login/index');

  }

  function cekuser() {
        $data['query'] = $this->m_daftar->cekdb();
        if ($data['query'] == null) {
            return false;
        } else {
            return $data['query'];
        }
    }
    function proseslogin() {
        $data['title'] = 'Login Admin';
        $data['loginheader'] = 'Login';

        if ($this->cekuser() == true) {

            $data['gagal'] = '<div id="notification">Username Already Taken.</div>';
            $this->load->view('va_daftar', $data);

        } else {
            $data['logo'] = 'MYWEB';
            $data['username'] = 'Account: ' . $this->input->post('username');
            $newdata = array(
                'username_user' => $data['username'],
                'islogin' => true
            );

            $this->terima();
            $this->session->set_userdata($newdata);
            $this->load->view('va_home', $data);
        }
    }
}

?>
