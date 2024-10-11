<?php

namespace App\Models;

use CodeIgniter\Model;

class clientModel extends Model
{
    protected $table = 'client';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iddate','name','number','address','user']; // transport Add other fields as needed
    
    public function getSingle($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('client');
        $query->where('id', $id);
        $row = $query->get();
        return $row->getRow();
                    
    }
   



}
?>