<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengesah extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["permohonan"] = modules::run("permohonan/senarai","1","pengesah");
		$data["sejarah"] 	= modules::run("permohonan/senarai","2","pengesah");

		$data["content"]["1"] = $this->load->view('pengesah/senarai', $data, TRUE);
		$this->load->view("layout",$data);
	}

	public function update_status($bil){
		modules::run("permohonan/ubah_status",$bil,"2");
		redirect("pengesah");
	}

	public function detail($bil){
		$data["content"]["1"] = modules::run("permohonan/detail",$bil,"pengesah");
		$this->load->view('layout', $data);
	}

}

/* End of file pengesah.php */
/* Location: ./application/controllers/pengesah.php */
