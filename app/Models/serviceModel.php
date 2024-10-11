<?php

namespace App\Models;

use CodeIgniter\Model;

class serviceModel extends Model
{
    protected $table = 'service';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iddate','name','cost','deis','img','user','sub_ser']; // transport Add other fields as needed
    
    public function getSingle($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('service');
        $query->where('id', $id);
        $row = $query->get();
        return $row->getRow();
                    
    }
    public function findimage()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT service.*, (SELECT img_name FROM image WHERE service_id = service.id LIMIT 1) as img, (SELECT name FROM users WHERE id = service.user LIMIT 1) as user FROM service");
        $result = $query->getResultArray();
    
        return $result;
    }
    
    public function getImg()
    {
        $db = \Config\database::connect();
        $query = $db->query("SELECT *, (SELECT img_name FROM image WHERE service_id = service.id LIMIT 1) as img FROM service WHERE sub_ser IS NULL");
        return $query->getResultArray();
                    
    }
    public function getSub_service($id)
    {
        $db = \Config\database::connect();
        $query = $db->query("SELECT * FROM service WHERE sub_ser=$id");
        return $query->getResultArray();
                   
    }
    
    public function getServiceImagesById($id)
    {
        $db = \Config\database::connect();
        $query = $db->query("SELECT * FROM image WHERE sub_ser =$id");
        return $query->getResultArray();
                    
    }
    public function getServiceImagesByIdupdate($id)
    {
        $db = \Config\database::connect();
        $query = $db->query("SELECT * FROM image WHERE id =$id");
        return $query->getResultArray();
                    
    }
    /*
    public function getSub_service($id)
{
    $db = \Config\Database::connect();
    $query = $db->query("SELECT service.*, (SELECT img_name FROM image WHERE service_id = service.id LIMIT 1) as img FROM service WHERE sub_ser=$id");
    $result = $query->getResultArray();

    return $result;
}
*/
    
    public function getMain_service()
    {
        $db = \Config\database::connect();
        $query = $db->query("SELECT *, (SELECT img_name FROM image WHERE service_id = service.id LIMIT 1) as img FROM service WHERE sub_ser=0 OR sub_ser is null ");
        return $query->getResultArray();
                    
    }
    public function demoimg()
    {
        $db = \Config\database::connect();
        $query = $db->query("SELECT * FROM image");
        return $query->getResultArray();
                    
    }

}
?>