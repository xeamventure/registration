<?php
class LoginModel extends CI_Model
{
    public function validate_login($userid, $password)
    {
        $q=$this->db->where(['UserName'=>$userid,'Password'=>$password])->get('tribe_registration');
        if ($q->num_rows()>=1) {
            return $q->row();
        } else {
            return false;
        }
    }

    public function new_regisration(array $data)
    {
      return  $this->db->insert('tribe_registration',$data);
    }
}
