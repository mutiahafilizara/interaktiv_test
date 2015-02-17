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
		$this->load->view("register");
	}

	function login()
	{
		$this->load->view("login");
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
		$config["smtp_host"] = 'ssl://smtp.googlemail.com';
		$config["smtp_port"] = '465';
		$config["smtp_timeout"] = '40';
		$config["smtp_user"] = "fortestmutia@gmail.com";
		$config["smtp_pass"] = "fortest123";
		$config["charset"] = "utf-8";

		$this->email->initialize($config);

		$this->email->from('fortestmutia@gmail.com', 'Mutia Hafilizara');
		$this->email->to($reg["email"]);
		
		$this->email->subject('Login Information');
		$this->email->message($message);
		
		$this->email->send();
		
		echo $this->email->print_debugger();		
		redirect("user/login");
	}
	
	function login_action()
	{
		$username=$this->input->post("username");
		$password=$this->input->post("password");

		$row = $this->m_user->getRow($username)->row();
		$passw=$row->password;


		if(md5($password)==$passw)
		{
			redirect("user/home");
		}
		else
		{
			redirect("user/login");
		}

	}

	function home()
	{
		$this->load->view("contoh");	
	}

	function email_check($email)
	{

		$this->db->where('email', $email);
		$query = $this->db->get('register_table');
		if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; } 
	}

	function check_email_availablity()
	{
	    $get_result = $this->email_check($this->input->post("email"));
	    
	    if(!$get_result )
	    echo '1';
	    else
	    echo '0';
	}



}