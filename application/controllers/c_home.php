<?php
class c_home extends CI_Controller {

	public function __construct (){
		parent::__construct();

		$this->load->model('m_product');
		$this->load->model('m_login');
	}

	//fungsi untuk memanggil form utama
	function index(){
		$data['upload'] = $this->m_product->all_products();
		$this->load->view('v_home',$data);
	//echo anchor('c_biodata/tambah','Tambah Identitas Biodata').br(1);
	}
	function tampildetail($id)
	{
		$profil = $this->m_product->getusername($id);
    $data['data_upload'] = $this->m_login->getdataid($profil);
    $data['data_rumah'] = $this->m_product->getdataid($id);
    $this->load->view('va_tampildetail', $data);
	}
}
?>
