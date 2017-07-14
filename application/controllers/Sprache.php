<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sprache extends CI_Controller {

    public function __construct()
    {                
    	parent::__construct();
        $this->load->model('sprache_model');
        $this->load->helper('url_helper');


    }

	public function index()
	{
		$data['sprachen'] = $this->sprache_model->get_sprachen();
		$data['title'] = 'Vokabeln';
		$data['Version'] = '0.0.1'
		$data['copyright'] = '(c) 2017 by Stefan Beyer';
		$data['heading'] = 'Sprachen';

		$this->load->view('templates/html_head', $data);
		$this->load->view('templates/html_menue', $data);
		$this->load->view('sprache', $data);
		$this->load->view('templates/html_footer', $data);
	}


	public function edit($id = FALSE)
	{
		$data['sprache'] = $this->sprache_model->get_sprachen($id);
		$data['title'] = 'Vokabeln';
		$data['copyright'] = '(c) 2017 by Stefan Beyer';
		$data['heading'] = 'bearbeite Sprache: '. $data['sprache']['Sprache'];

    $this->load->helper('form');
    $this->load->library('form_validation');

		$this->load->view('templates/html_head', $data);
		$this->load->view('templates/html_menue', $data);
		$this->load->view('edit_sprache', $data);
		$this->load->view('templates/html_footer', $data);
	}

}
