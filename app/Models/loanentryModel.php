<?php

namespace App\Models;

use CodeIgniter\Model;

class loanentryModel extends Model
{
    protected $table = 'loanentry';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iddate','vehicle','remaning','date','user']; // transport Add other fields as needed
    
    public function getSingle($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('loanentry');
        $query->where('id', $id);
        $row = $query->get();
        return $row->getRow();
                    
    }
   



}
?>