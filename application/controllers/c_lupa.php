<?php
/**
 *
 */
class c_lupa extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('email');
    $this->load->model('m_lupa');
  }
  function index()
  {
    $this->load->view('v_lupa');
  }
  function cekemail()
  {
    $data['query'] = $this->m_lupa->cekdb();
    if ($data['query'] == null) {
      return false;
    } else {
      return $data['query'];
    }
  }

  function proseslupa()
  {
    if ($this->cekemail() == true) {
      $data['temp'] = $this->m_lupa->ambilemail();
      $data['pass'] = $this->m_lupa->ambilpass();
      $temp = $data['temp']->email;
      echo $temp;
      $temp1 = $data['pass']->password;
      echo $temp1;
      $this->kirim($temp, $temp1);

      //redirect("c_login",$data);
    }
  }

  function kirim($email,$pass)
  {
    $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.gmail.com',
    'smtp_port' => 465,
    'smtp_user' => 'rezacip0@gmail.com',
    'smtp_pass' => 'Muhamm4drc'

);

      $message = $pass;
      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('rezacip0@gmail.com'); // change it to yours
      $this->email->to('rezacip0@gmail.com');// change it to yours
      $this->email->subject('Lupa password');
      $this->email->message($message);
      $this->email->send();

  }
}

?>
