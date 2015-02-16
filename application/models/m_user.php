<?php

class M_user extends CI_model
{
	function getById($email)
	{
		$this->db->where("email",$email);
		return $this->db->get("register_table");
	}

	function getRow($username)
	{
		$this->db->where("username",$username);
		return $this->db->get("login_table");
	}

	function getAll1()
	{
		return $this->db->get("user");
	}

	function getAll()
	{
		return $this->db->get("register_table");
	}

	function insert_register($reg)
	{
		$this->db->insert("register_table",$reg);
		//return $reg;
	}

	function insert_login($login)
	{
		$this->db->insert("login_table",$login);
		return $login;
	}
}