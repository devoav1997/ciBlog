<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index()
	{
        $data['title'] = ucwords('Daftar Buku');

        $this->load->model('buku_model');
        $data['data'] = $this->buku_model->getAll();
		// var_dump($data); die;
		$this->load->view('template/header');
		$this->load->view('buku/index', $data);
		$this->load->view('template/footer');
	}

	public function view($idBuku = NULL) {
		$data['title'] = ucwords('Detil Buku');
		
		if (is_null($idBuku)) {
			show_404();
		}

		$this->load->model('buku_model');
		$data['data'] = $this->buku_model->getBukuById($idBuku);
		// var_dump($data); die;
		$this->load->view('template/header');
		$this->load->view('buku/view', $data);
		$this->load->view('template/footer');
	}

}
