<?php 

class User extends CI_Model {

	 function login($username, $password)
	{
		$this-> db -> select('email, password,firstname');
		$this -> db -> from('accounts');
		$this -> db -> where('email', $username);
		$this -> db -> where('password', md5($password));
		$this -> db -> limit(1);
		
		$query = $this -> db -> get();
		
		if($query -> num_rows() == 1){
			return $query -> result();
		} else{
			return false;
		}
	}
	
	function forgetpassword($username, $passwordhint)
	{
		$this-> db -> select('email, hint, firstname');
		$this -> db -> from('accounts');
		$this -> db -> where('email', $username);
		$this -> db -> where('hint', $passwordhint);
		$this -> db -> limit(1);
		
		$query = $this -> db -> get();
		
		if($query -> num_rows() == 1){
			return $query -> result();
		} else{
			return false;
		}
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */