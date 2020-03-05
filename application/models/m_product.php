<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_product extends CI_Model {
var $tabel = 'upload';
var $table = 'masuk';

function getdataid($id){
	$this->db->from($this->tabel);
	$this->db->where('id', $id);
	$query = $this->db->get();
	if ($query->num_rows() > 0) {
			return $query->result();
		}
}
	function getdata($data){
		$this->db->from($this->tabel);
		$this->db->where('username', $data);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
				return $query->result();
			}
	}
	function getusername($data){
		$this->db->select('username');
		$this->db->where('id', $data);
		$query = $this->db->get('upload');
		foreach ($query->result() as $row){
			return $row->username;
		}
	}
	function getfile($data){
        $this->db->select('gambar');
        $this->db->where('id', $data);
        $query = $this->db->get('upload');
        foreach ($query->result() as $row) {
            return $row->gambar;
        }
    }
	public function all_products()//لجلب  جميع البيانات واظهاراها في الصفحة الرئيسية
		{ //$show -> guery to get all products from table products
			$show = $this->db->get('upload');
			if($show->num_rows() > 0 ) {
					return $show->result();
			} else {
					 return array();
			} //end if num_rows

		}
	function adddata($data){
    $this->db->insert('upload',$data);
    }

		public function find($id)//للبحث عن رقم المنتج وتحقق من وجوده
			//this is for find record id->product
		{
			$code = $this->db->where('id',$id)->limit(1)->get('upload');
			if ($code->num_rows() > 0 )
				{
					return $code->row();
				}else {
					return array();
				}//end if code->num_rows > 0

		}
	function delete($username) {
    $this->db->where('id', $username);
    $this->db->delete($this->tabel);
    if ($this->db->affected_rows() == 1) {
        return TRUE;
    }
        return FALSE;
    }
		
		function edit($id, $data_products)
		{
			$this->db->where('id',$id)->update('upload', $data);
		}

		function terupdate($data, $idnya)
		{
			$this->db->where('id', $idnya);
			$this->db->update('upload', $data);
		}

  }
?>
