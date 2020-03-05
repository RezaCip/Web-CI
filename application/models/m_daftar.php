<?php
/**
 *
 */
class m_daftar extends CI_Model
{

  public function cekdb()
  {
    $username = $this->input->post('username');

    $this->db->select('id_nya');
    $this->db->where('id_nya', $username);
    $query = $this->db->get('masuk');
    foreach ($query->result() as $row) {
      return $row->username;
    }
  }

  function adddaftar($datanew)
  {
    $this->db->insert('masuk',$datanew);
  }
}
  ?>
