<?php

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iddate','name','passowrd','role']; // transport Add other fields as needed
    
    public function getSingle($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('users');
        $query->where('id', $id);
        $row = $query->get();
        return $row->getRow();
                    
    }
    public function isvalidate($name,$password)
    {
        $db = \Config\database::connect();
        $query = $db->table('users');
        $query->where('userName', $name);
        $query->where('password', $password);
        
        $row = $query->get();
        return $row->getRow();
        
                    
    }
    public function set_user_token($token,$userid)
    {
        $db = \Config\database::connect();
         $db->table('users')->where('id', $userid)->set('authtoken', $token)->update();
        
                    
    }
    public function getuser($token)
    {
        $db = \Config\database::connect();
        $query = $db->table('users');
        $query->where('authtoken', $token);
        
        $row = $query->get();
        return $row->getRow();
                    
    }
   



}
?>