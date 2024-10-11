<?php

namespace App\Models;

use CodeIgniter\Model;

class billModel extends Model
{
    protected $table = 'bill';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iddate','customer_id','amount','user']; // transport Add other fields as needed
    
    public function getSingle($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('bill');
        $query->where('id', $id);
        $row = $query->get();
        return $row->getRow();
                    
    }
   



}
?>