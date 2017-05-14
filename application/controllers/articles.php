<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class articles extends CI_Controller {

	public function index() {
		$this->load->view('liste_articles');
	}

	public function view() {
		/*
		$this->load->model('article');
		le chargement automatique est dans config->autoload.php
		*/

		$data = $this->article->get_data();
 		$this->load->view('vue_articles', $data);

		/* Appele direct sur le controller (mauvaise pratique, il faut le faire le View)
				$data = $this->article->get_data();
				echo '<h1>' .$data['article_name'] . '</h1><p>' . $data['article_body'] . '</p>';
		*/

		public function add() {
			$this->article->article_name = 'Mon deuxième article (num ' .rand(1,1000).')';
			$this->article->article_body = 'Mon deuxième article est extra';
			$this->article->article_modified = date('Y-m-d H:i:s');
			$this->article->article_created = date('Y-m-d H:i:s');

			$this->article->save();
		}
	}
}
