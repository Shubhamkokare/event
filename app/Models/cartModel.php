<?php

namespace App\Models;

use CodeIgniter\Model;

class cartModel extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iddate','service_id','booking_id','rate','qty','user','remark']; // transport Add other fields as needed
    
    public function getSingle($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('cart');
        $query->where('id', $id);
        $row = $query->get();
        return $row->getRow();
                    
    }
    public function getService_list($id)
    {
        $db = \Config\database::connect();
        $query = $db->query("SELECT *, (SELECT img_name FROM image WHERE id = cart.service_id LIMIT 1) as img ,(SELECT name FROM image WHERE id = cart.service_id) as name FROM cart WHERE booking_id=$id");
        return $query->getResultArray();
                    
    }
    public function getCartDataById($id)
    {
        $db = \Config\database::connect();
        $query = $db->query("SELECT *, (SELECT name FROM image WHERE id = cart.service_id ) as name FROM cart WHERE booking_id=$id");
        return $query->getResultArray();
                    
    }
}
?>