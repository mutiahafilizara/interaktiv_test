<?php

class M_user extends CI_model
{
	function getById($email)
	{
		$this->db->where("email",$email);
		return $this->db->get("register_table");
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