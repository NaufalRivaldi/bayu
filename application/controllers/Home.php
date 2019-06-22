<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller { 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }
	public function index()
	{
		$this->load->view('login');
    }
    
    public function login(){
        $user=$this->user_model;
        $val=$this->form_validation;
        $val->set_rules($user->rules());
        if($val->run()){
            $user->login();
            redirect('home/dashboard');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

    public function dashboard(){
        $this->load->view('dashboard');
    }
}
