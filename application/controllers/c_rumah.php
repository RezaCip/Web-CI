<?php

class c_rumah extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url', 'file'));
    $this->load->model('m_product');
    $this->load->model('m_login');
  }
  function index()
  {
    $temp = $this->session->userdata('username');
    $data['data_rumah'] = $this->m_product->getdata($temp);
    $this->load->view('v_datarumah',$data);
  }

  function tambah()
  {
    $temp = $this->session->userdata('username');
    $this->load->view('v_addrumah', $temp);
  }

  function terima()
  {
    $config['upload_path']        = './Asset/uploads/';
    $config['allowed_types']      = 'jpg|png|jpeg';
    $config['max_size']           = 2048;
    $config['remove_space']				= TRUE;
    $this->load->library('upload', $config);

    $temp = $this->session->userdata('username');

    if($this->upload->do_upload() == true){
      $gambar = $this->upload->data();
      $data = array ('judul' => $_POST['judul'],
                     'tipe' => $_POST['tipe'],
                     'lb' => $_POST['luasbangun'],
                     'lt' => $_POST['luastanah'],
                     'deskripsi' => $_POST['deskripsi'],
                     'lokasi' => $_POST['lokasi'],
                     'harga' => $_POST['harga'],
                     'gambar' => $gambar['file_name'],
                     'username' => $temp);
      $this->load->model('m_product');
      $this->m_product->adddata($data);
    }
    else {
      echo $this->upload->display_errors();
    }

    redirect('c_rumah/index');
  }

  function delete($username, $gambar)
  {
  $this->m_product->delete($username);
  unlink("./Asset/uploads/".$gambar);
  redirect('c_rumah/index');
  }
  function edit($id)
  {

    $data['data_rumah'] = $this->m_product->getdataid($id);
    $this->load->view('v_edit', $data);
  }

  function terupdate($id)
  {

    $config['upload_path']        = './Asset/uploads/';
    $config['allowed_types']      = 'jpg|png|jpeg';
    $config['max_size']           = 2048;
    $config['remove_space']				= TRUE;
    $this->load->library('upload', $config);

    // $idnya =$this->segment->uri(3);

    $datalama = $this->m_product->getfile($id);

    if ($this->upload->do_upload() == true) {
      unlink("./Asset/uploads/".$datalama);
      $filerumah = $this->upload->data();

      $data = array ('tipe' => $_POST['tipe'],
                     'deskripsi' => $_POST['deskripsi'],
                     'lokasi' => $_POST['lokasi'],
                     'harga' => $_POST['harga'],
                     'gambar' => $filerumah['file_name']);

      $this->m_product->terupdate($data, $id);
      redirect('c_rumah/index');
    }else{
      $data = array ('judul' => $_POST['judul'],
                     'tipe' => $_POST['tipe'],
                     'deskripsi' => $_POST['deskripsi'],
                     'lokasi' => $_POST['lokasi'],
                     'harga' => $_POST['harga'],
                     'gambar' => $datalama);

      $this->m_product->terupdate($data, $id);
      redirect('c_rumah/index');
    }
  }
  function tampildetail($id)
  {
    $profil = $this->m_product->getusername($id);
    $data['data_upload'] = $this->m_login->getdataid($profil);
    $data['data_rumah'] = $this->m_product->getdataid($id);
    $this->load->view('v_tampildetail', $data);
  }
}
 ?>
