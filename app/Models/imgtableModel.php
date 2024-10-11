<?php

namespace App\Models;

use CodeIgniter\Model;

class imgtableModel extends Model
{
    protected $table = 'image';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iddate','img_name','service_id','cost','user','sub_ser','name']; // transport Add other fields as needed
    
    public function getSingle($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('image');
        $query->where('id', $id);
        $row = $query->get();
        return $row->getRow();
                    
    }
    public function showimage($id)
{
    $db = \Config\database::connect();
    $query = $db->query("SELECT img_name FROM image WHERE service_id = $id");
    $result = $query->getResultArray();

    $imageUrls = array_column($result, 'img_name');

    return $imageUrls;
}




}
?>