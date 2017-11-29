<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->model('games_model');
            $this->load->helper('form');
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

	public function detail($id)
	{	
		# Searching game from id (default value: NULL)
		$data["game_info"] = $this->games_model->search_game_by_id($id);

		if (empty($data['game_info']))
        {	
        	# When there are no games with the id
        	show_404();
        }

        # Define the fields for the view (is better in controller than view)
        $data['game_title'] = $data['game_info']['ga_title'];
        $data['platform'] = $data['game_info']['ga_platform'];
        $data['developer'] = $data['game_info']['ga_developer'];
        $data['genre'] = $data['game_info']['ga_genre'];
        $data['review'] = $data['game_info']['ga_review'];
        $data['image'] = $data['game_info']['ga_image'];

        $data["title"] = "Game Shop";
		$data["context"] = "Game Detail";

        #building the view
		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('detail', $data);
		$this->load->view('templates/footer', $data);
	}

	public function save_game(){
		# Load helper and validation library
		$this->load->helper('form');
		$this->load->library('Form_validation');

		$data['title'] = 'Saving the new Game';
		$data['context'] = 'Save new game';

		# setting rules for input validation
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('platform', 'Platform', 'required');
		$this->form_validation->set_rules('developer', 'Developer', 'required');
		$this->form_validation->set_rules('genre', 'Genre', 'required');
		$this->form_validation->set_rules('review', 'Review', 'required');
		$this->form_validation->set_rules('image', 'Game Image', 'required');
		
		if ($this->form_validation->run() === FALSE) {
			# The validator found some problems
			$data['response'] = "Please check the recently typed information.";
		}else{
			# It is fine, let's save the new game
			$data["response"] = $this->games_model->set_game();
			
		}

		#building the view
			$this->load->view('templates/header', $data);
			$this->load->view('templates/menu', $data);
			$this->load->view('saved', $data);
			$this->load->view('templates/footer', $data);


	}

}
