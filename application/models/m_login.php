<?php
class m_login extends CI_Model {
  var $tabel = 'masuk';

    public function cekdb() {
        //mengambil data dari form login username
        $username = $this->input->post('username');
        //mengambil data dari form login password
        $password = $this->input->post('password');

        //sql select usr_id
        $this->db->select('id_nya');
        //sql where usr_name = username yang diambil dari form login
        $this->db->where('id_nya', $username);
        //sql where usr_pwd = password yang diambil dari form login
        $this->db->where('password', $password);
        //sql tabel yang dipilih m_user
        $query = $this->db->get('masuk');
        //perulangan nilai array yang berisi data dari query sql diatas
        foreach ($query->result() as $row) {
            return $row->id_nya;
        }
    }
    function getdataid($id){
    	$this->db->from($this->tabel);
    	$this->db->where('id_nya', $id);
    	$query = $this->db->get();
    	if ($query->num_rows() > 0) {
    			return $query->result();
    		}
    }

}
?>
