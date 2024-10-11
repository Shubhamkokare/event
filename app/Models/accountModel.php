<?php

namespace App\Models;

use CodeIgniter\Model;

class accountModel extends Model
{
    protected $table = 'accounting';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iddate','bill_no','customer_id','total','paid','note','user']; 
    
    public function getSingle($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('accounting');
        $query->where('id', $id);
        $row = $query->get();
        return $row->getRow();
                    
    }
   
    public function findcustname()
    {
        $db = \Config\Database::connect(); 
        $query = $db->table('accounting');
        $query->select('*, (SELECT name FROM client WHERE id = accounting.customer_id) AS customer_name');
        $result = $query->get()->getResultArray();    
        return $result;
    }
   

}
?>