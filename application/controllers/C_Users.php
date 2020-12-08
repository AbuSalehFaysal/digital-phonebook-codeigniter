<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Users extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('javascript');
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->library('session');
    }

	public function index()
	{
		$this->load->view('index');
    }

    public function signup()
	{
		$this->load->view('sign-up');
    }
    
    public function userRegistration()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Please, fill the form properly!');
            $this->signUp();
        } else {
            $name = $this->input->post('name', true);
            $email = $this->input->post('email', true);
            $pass = $this->input->post('pass', true);
            $userInfo = $this->mu->insertUserData($name, $email, $pass);

            if ($userInfo) {
                $this->session->set_flashdata('success', 'Congatulations! you can sign in now!');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Sign-up failed! Database error occured');
                redirect('admin/sign-up');
            }
        }
    }

    public function dashboard()
	{
		$this->load->view('dashboard');
    }

}