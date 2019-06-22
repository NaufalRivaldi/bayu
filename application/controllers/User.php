<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller { 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');

        $this->user_model->cekLogin();
    }
	public function index(){
        $data['user'] = $this->user_model->showData();
		$this->load->view('user/index', $data);
    }

    public function add(){
        $this->load->view('user/form');
    }

    public function delete($id){
        $this->user_model->delete($id);
        redirect('user');
    }
}
