<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mohon_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = "permohonan";
	}	

	function get_status($status){

		$this->db->where("status",$status);
		$query = $this->db->get($this->table);

		return $query->result();
	}	

	function get_bil($bil){
		$this->db->where("bil",$bil);
		$query = $this->db->get($this->table);

		return $query->result();
	}

}

/* End of file mohon_m.php */
/* Location: ./application/modules/permohonan/models/mohon_m.php */
