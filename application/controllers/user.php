<?php

class User extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(array("m_user"));
	}

	function index()
	{
		$this->load->view("view_register");
	}

	function login()
	{
		$this->load->view("view_login");
	}

	function reg_action()
	{
		//register table
		$reg["id"]="";
		$reg["email"]=$this->input->post("email");
		$reg["sur_name"]=$this->input->post("surname");
		$reg["last_name"]=$this->input->post("lastname");
		$reg["job_title"]=$this->input->post("title");
		$reg["company_name"]=$this->input->post("company");

		$this->m_user->insert_register($reg);	

		//login table
		$row=$this->m_user->getById($reg["email"])->row();
		
		$pass=rand(10000,90000);
		$passForEmail = $pass;

		$login["register_table_id"]=$row->id;
		$login["username"]=$this->input->post("username");
		$login["password"] = md5($pass);

		$this->m_user->insert_login($login);

		$message = "Username : ".$login["username"]."<br> Password : ".$passForEmail;

		//send mail confirmation
		$this->load->library('email');
		
		$config["protocol"] = 'smtp';
		$config["smtp_host"] = 'ssl://smtp.gmail.com';
		$config["smtp_port"] = '465';
		$config["smtp_timeout"] = '30';
		$config["smtp_user"] = "luthfinoviandi@gmail.com";
		$config["smtp_pass"] = "muteparamore";
		$config["charset"] = "utf-8";

		$this->email->initialize($config);

		$this->email->from('luthfinoviandi@gmail.com', 'Mutia Hafilizara');
		$this->email->to($reg["email"]);
		
		$this->email->subject('Login Information');
		$this->email->message($message);
		
		$this->email->send();
		
		echo $this->email->print_debugger();		
		//redirect("user/login");
	}
}