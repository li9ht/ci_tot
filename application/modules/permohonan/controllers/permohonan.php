<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Permohonan extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("mohon_m");
	}

	public function index(){}

	public function baru($return_url){

		$data["return_url"] = $return_url;
		return $this->load->view('baru',$data,TRUE);
	}

	public function senarai($status){
		$data["status"] = $status;

		$data["senarai_mohon"] = $this->mohon_m->get_status("1");

		return $this->load->view('senarai_permohonan', $data, TRUE);
	}

	public function detail($bil,$level){

		$data["level"] = $level;
		$mohon = $this->mohon_m->get_bil($bil);
		$data["mohon"] = $mohon[0];
		return $this->load->view('detail', $data, TRUE);
	}


	public function save(){

		$nama = $this->input->post("nama");
		$ukmper = $this->input->post("ukmper");
		$dari	= $this->input->post("dari");
		$hingga = $this->input->post("hingga");

		$insert = array(
			'nama' => $nama ,
			'ukmper' => $ukmper,
			'dari' => $dari,
			'hingga' => $hingga,
			'status' => "1"
		);

		$this->db->insert("permohonan",$insert);
		
	}
}

/* End of file permohonan.php */
/* Location: ./application/modules/permohonan/controllers/permohonan.php */
