<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->model('games_model');
            //$this->load->helper('url_helper');
    }

	public function index()
	{	
		#getting data
		$data['games'] = $this->games_model->get_games(FALSE);
		$data["title"] = "Game Shop";
		$data["context"] = "Home";

		#building the view
		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer', $data);
	}
}
