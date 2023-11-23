<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
    public function __construct(){
        parent::__construct();
        $this->call->database();
    }

	public function insert_data($username, $password, $email){
        $data = array(
            'username' => $username,
            'password' => $password,
            'email' => $email
        );

        $this->db->table('user')->insert($data);

        if($result)
            return true;
    }
    
}
?>
