<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('id, username, password');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();

   }
   else
   {
     return false;
   }
 }


public function verify_user($username, $password) {
   $query = $this
               ->db
               ->where('username', $username)
               ->where('password', $password)
               ->limit(1)
               ->get('users');

   if ($query->num_rows > 0) {
      // echo'<pre>';
      // print_r($query->row());
      // echo '</pre>';
      return $query->row();
   }

}

}


?>