<?php

namespace App\Models;

use CodeIgniter\Model;

class booking_detailsModel extends Model
{
    protected $table = 'booking_details';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iddate','lastupdate','book_id','service_id','rate','qty','status','remark','customer_id','total']; // transport Add other fields as needed
    
    public function getSingle($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('booking_details');
        $query->select('*, (SELECT name FROM service WHERE id = booking_details.service_id) AS product_name');

        $query->where('id', $id);
        $row = $query->get();
        return $row->getRow();
                    
    }
    public function findtotal($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('booking_details');
        $query->select('*, 
                        (SELECT name FROM service WHERE id = booking_details.service_id) AS product_name');                        
        $query->where('book_id', $id);
    
        $result = $query->get()->getResultArray();
        return $result;
    }
    public function customer($id)
    {
        $db = \Config\Database::connect();
        $query = $db->table('booking_details');
        $query->select('(SELECT name FROM client WHERE id = :id) AS customer', ['id' => $id]);
        $row = $query->get();
        return $row->getRow();
    }
    




}
?>