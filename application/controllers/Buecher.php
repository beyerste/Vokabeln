<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buecher extends CI_Controller {

    public function __construct()
    {                
    	parent::__construct();
        $this->load->model('buecher_model');
        $this->load->helper('url_helper');


    }

	public function index()
	{
		$data['buecher'] = $this->buecher_model->get_buecher();
		$data['title'] = 'Vokabeln';
		$data['copyright'] = '(c) 2017 by Stefan Beyer';
		$data['heading'] = 'Bücher';

		$this->load->view('templates/html_head', $data);
		$this->load->view('templates/html_menue', $data);
		$this->load->view('buecher', $data);
		$this->load->view('templates/html_footer', $data);
	}


	public function edit($id = FALSE)
	{
		$data['buch'] = $this->buecher_model->get_buecher($id);
		$data['title'] = 'Vokabeln';
		$data['copyright'] = '(c) 2017 by Stefan Beyer';
		$data['heading'] = 'bearbeites Buch: '. $data['buch']['Buchname'];

		$this->load->view('templates/html_head', $data);
		$this->load->view('templates/html_menue', $data);
		$this->load->view('edit_buch', $data);
		$this->load->view('templates/html_footer', $data);
	}

}
