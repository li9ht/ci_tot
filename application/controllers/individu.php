<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Individu extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["level"] ="individu";
		$data["content"]["1"] = $this->load->view('individu/senarai', $data, TRUE);

		$this->load->view('layout', $data);
	}

	public function mohon(){
		$data["content"]["1"] = modules::run("permohonan/baru","individu/mohon_save");
		$this->load->view('layout', $data);

	}

	public function mohon_save(){
		modules::run("permohonan/save","individu");
		redirect("individu","refresh");
	}

	public function detail($bil){
		$data["content"]["1"] = modules::run("permohonan/detail",$bil);
		$this->load->view('layout', $data);
	}


}

/* End of file individu.php */
/* Location: ./application/controllers/individu.php */
