<?php

	Class Login_auth extends CI_Model {

		
	// Insert registration data in database
	public function registration_insert($data) {

		// Query to check whether username already exist or not
		$condition = "user_name =" . "'" . $data['user_name'] . "'";
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		
		if ($query->num_rows() == 0) {

			// Query to insert data in database
			$this->db->insert('user_login', $data);
			if ($this->db->affected_rows() > 0) {
				return true;
			}
			} else {
				return false;
			}
		}	

	// Read data using username and password
	public function login($data) {

		$condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	// Read data from database to show data in admin page
	public function read_user_information($sess_array) {

		$condition = "email =" . "'" . $sess_array['email'] . "'";
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}	
	}

	public function read_user_information1($sess_array) {

		$condition = "email =" . "'" . $sess_array['email'] . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}	
	}

	public function read_client_information1($sess_array) {

		$condition = "email =" . "'" . $sess_array['email'] . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}	
	}

	public function login_user($data){
		$condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}

	}

	public function daftar($data){
		$query = $this->db->insert('user',$data);
		if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
	}

	public function loginuser($data) {

		$condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	public function change_password_client($data){
		 $query = "UPDATE user SET password='$data[password]' WHERE id=$data[id]";
        //Get all invoices from Invoices table
        $hasil = $this->db->query($query);
        if($hasil){
            return true;
        } else {
	            return false;       
	    }
	}

}

?>