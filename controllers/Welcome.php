<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->model('fruitModel');
		$data["fruits"] = $this->fruitModel->getFruits();
		$this->load->view('welcome_message',$data);
	}

	public function updateForm(){
		$this->load->model('fruitModel');
		$data["fruit"] = $this->fruitModel->getOne( $this->uri->segments[3]);
		$this->load->view("updateForm",$data);
	}

	public function updateAction(){
		$this->load->model('fruitModel');
		$this->fruitModel->update($_POST);
		header("location:/index.php/welcome");
	}

	public function delete(){
		$this->load->model('fruitModel');
		$this->fruitModel->delete($this->uri->segments[3]);
		header("location:/index.php/welcome");
	}

	public function addForm(){
		$this->load->model('fruitModel');
		$this->load->view("addForm");
	}
	
	public function addAction(){
		$this->load->model('fruitModel');
		$this->fruitModel->add($_POST);
		header("location:/index.php/welcome");
	}
}
