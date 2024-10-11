<?php

namespace App\Models;

use CodeIgniter\Model;

class order_listModel extends Model
{
    protected $table = 'order_list';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iddate','order_id','product','qty','price','amount','user']; // transport Add other fields as needed
    
    public function getSingle($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('order_list');
        $query->where('id', $id);
        $row = $query->get();
        return $row->getRow();
                    
    }
   



}
?>