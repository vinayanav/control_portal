<?php
class mod extends CI_model
{
	
	public function logchk($a,$b)
	{
		$this->db->select('*');
        $this->db->from("login");
	
        //$this->db->select('username','password');
        //$this->db->from('login');
        $this->db->where('username',$a);
        $this->db->where('password',$b);
        $this->db->limit('1');
     $query = $this->db->get();
        $res=$query->result();
        return $res;
}
 public function addreg($s)
{
    $this->db->insert('register',$s);
   $lid=$this->db->insert_id();
    return $lid;
}
public function addlog($log)
{
    $this->db->insert('login',$log);

}
public function addcat($a)
{
     $this->db->insert('category',$a);
}
public function catsel()
    {
    $this->db->select('*');
    $query = $this->db->get('category');
    return $query;
    }
}
?>
        
