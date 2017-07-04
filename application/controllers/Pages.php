<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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
	 function __construct(){
		parent:: __construct();
		$this->load->model('bd_m','m');
		$this->load->helper('url');

	}
	public function view($page = "home", $numPage ="1")
	{

		$data['title'] = $page;
		$data['num'] = $numPage;

		//$data['tablaCanchas']= $this->m->getData("canchas");
		//$data['tablaCliente']= $this->m->getData("cliente");
		//$data['tablaGym']= $this->m->getData("gym");
		//$data['tablaHorarios']= $this->m->getData("horarios");


		switch($page){

			case "home": 

				$data['cssDir'] = 'css/2-col-portfolio.css';
				$this->load->view('/templates/header',$data);
				$this->load->view('/templates/nav');

				$this->load->view('/pages/'.$page);
				break;

			case "cancha":
				$data['cssDir'] = 'css/portfolio-item.css';

				$this->load->view('/templates/header',$data);
				$this->load->view('/templates/nav');

				$this->load->view('/pages/'.$page);
				break;

			case "recinto":
				$data['cssDir'] = 'css/portfolio-item.css';

				$this->load->view('/templates/header',$data);
				$this->load->view('/templates/nav');

				$this->load->view('/pages/'.$page);
				break;		
		}
		$this->load->view('/templates/footer');
	}
}
