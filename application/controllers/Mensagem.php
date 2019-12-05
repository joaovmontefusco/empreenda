<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Mensagem
 * 
 * @author Bernardo Pinheiro Camargo
 * @since 2019
 */
class Mensagem extends MY_Controller
{

	/**
	 * 
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
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mensagem_model');
		
	}

	public function index()
	{
		header("Access-Control-Allow-Origin: *");

		$this->template->use_module('mensagem');
		$this->template->loadModules();

		$this->template->render('master', 'mensagem');
	}


	public function enviar_msg(){
		$post = $this->input->post();

		if ($this->Mensagem_model->create($post)) {
			$this->session->set_flashdata('retorno', 'Mensagem enviada. Abrax');
		}
		else{
			$this->session->set_flashdata('retorno', 'Cago no pau');
		}
		redirect(site_url(),'location');
	}
}
