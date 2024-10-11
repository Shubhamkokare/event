<?php

namespace App\Models;

use CodeIgniter\Model;

class ordersModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iddate','tax_amount','net_amount','user']; // transport Add other fields as needed
    
    public function getSingle($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('orders');
        $query->where('id', $id);
        $row = $query->get();
        return $row->getRow();
                    
    }
   



}
?>