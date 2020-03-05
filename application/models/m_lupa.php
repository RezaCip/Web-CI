<?php
/**
 *
 */
class m_lupa extends CI_Model
{

  public function cekdb()
  {
    $username = $this->input->post('username');
    $email = $this->input->post('emaillupa');

    $this->db->select('id_nya');
    $this->db->where('id_nya', $username);
    $this->db->where('email', $email);
    $query = $this->db->get('masuk');

    // foreach ($query->result() as $row) {
    //   return $row->id_nya;
    // }
    return $query->row();
  }
  function ambilpass()
  {
    $username = $this->input->post('username');
    $q = "SELECT password FROM masuk WHERE id_nya = '$username'";
    $query = $this->db->query($q);
    return $query->row();
  }
  function ambilemail()
  {
    $username = $this->input->post('username');
    $q = "SELECT email FROM masuk WHERE id_nya = '$username'";
    $query = $this->db->query($q);
    return $query->row();
  }
}

 ?>
