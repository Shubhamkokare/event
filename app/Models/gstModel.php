<?php

namespace App\Models;

use CodeIgniter\Model;

class gstModel extends Model
{
    protected $table = 'gst';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iddate','tax_name','parcentage','user']; // transport Add other fields as needed
    
    public function getSingle($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('gst');
        $query->where('id', $id);
        $row = $query->get();
        return $row->getRow();
                    
    }
   



}
?>