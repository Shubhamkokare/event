<?php

namespace App\Models;

use CodeIgniter\Model;

class categoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iddate','name','status','user']; // transport Add other fields as needed
    
    public function getSingle($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('category');
        $query->where('id', $id);
        $row = $query->get();
        return $row->getRow();
                    
    }
    public function getCategory()
    {
        $db = \Config\database::connect();
        $query = $db->table('category');
        $query->SELECT('*, (select name FROM users WHERE id=category.user)as user');
        $row = $query->get();
        return $row->getResultArray();
                    
    }
   



}
?>