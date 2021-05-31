<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salam extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{   
        $data['title'] = ucwords('salam');
        $data['par'] = ucwords('Selamat data');
		$this->load->view('salam', $data);
	}

    public function view($kamu = NULL){
        if(is_null($kamu)){
            $kamu = "Kamu";
        }

        $data['title'] = ucwords('salam');
        $data['kamu'] = $kamu;
        $this->load->view('salam/view', $data);
    }
}