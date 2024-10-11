<?php

namespace App\Models;

use CodeIgniter\Model;

class bookModel extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iddate','client_id','by_userid','func_id','address','func_date','remark','all_total']; // transport Add other fields as needed
    
    public function getSingle($id)
    {
        $db = \Config\database::connect();
        $query = $db->table('booking');
        $query->select('*, (SELECT name FROM category WHERE id = booking.func_id) AS function_name');

        $query->where('id', $id);
        $row = $query->get();
        return $row->getRow();
                    
    }
    public function findcustomer()
{
    $db = \Config\Database::connect(); // Assuming \Config\Database is the correct namespace for Database class
    $query = $db->table('booking');
    $query->select('*, (SELECT name FROM client WHERE id = booking.customer_id) AS customer_name');
    $query->groupBy('customer_id');
    $result = $query->get()->getResultArray();

    return $result;
}
public function findtotal($id)
{
    $db = \Config\database::connect();
    $query = $db->table('booking');
    $query->select('*, (SELECT name FROM service WHERE id = booking.name) AS product_name');
    $query->where('customer_id',$id);

    $result = $query->get()->getResultArray();
    return $result;

                
}
public function updateorder($id)
{
    $db = \Config\database::connect();
    $query = $db->table('booking');
    $query->select('*, (SELECT name FROM service WHERE id = booking.name) AS product_name');
    $query->where('id',$id);
    $row = $query->get();
    return $row->getRow();

       
    
}

public function findcustname()
    {
        $db = \Config\Database::connect(); // Assuming \Config\Database is the correct namespace for Database class
        //$query = $db->table('booking');
      //  $query->select('*, (SELECT name FROM client WHERE id = booking.client_id) AS customer_name');
       // $query->select('*, (SELECT name FROM category WHERE id = booking.func_id) AS function');
       $query = $db->query("SELECT *,(SELECT CONCAT(name,'-',number) FROM client WHERE id=booking.client_id) as customer_name,(SELECT name FROM category WHERE id=booking.func_id) as f_name FROM booking");
       

        $result = $query->getResultArray();
    
        return $result;
    }
    
public function getAllByCustomerId($id)
{
    $db = \Config\Database::connect(); // Assuming \Config\Database is the correct namespace for Database class
    $query = $db->query("SELECT *,(SELECT CONCAT(name,'-',number) FROM client WHERE id=booking.client_id) as customer_name,(SELECT name FROM category WHERE id=booking.func_id) as f_name FROM booking WHERE client_id=$id");
    $result = $query->getResultArray();

    return $result;
}
public function getBillDetilsByid($id)
{
    $db = \Config\database::connect();
    $query = $db->table('booking');
    $query->select('*, (SELECT name FROM client WHERE id = booking.client_id) AS customer_name ,(SELECT name FROM category WHERE id = booking.func_id) AS function_name');
    $query->where('id',$id);
    $row = $query->get();
    return $row->getRow();
                
}
public function getTisMonthOrder()
{
    $db = \Config\Database::connect(); 
    $query = $db->table('booking');
    $query->select('*, (SELECT name FROM client WHERE id = booking.client_id) AS customer_name ,(SELECT name FROM category WHERE id = booking.func_id) AS f_name');
    $query->where('func_date >=', date('Y-m-d'))->where('func_date <=', date('Y-m-30'));
    $result = $query->get()->getResultArray();
    
    return $result; 
}
public function getNextMonthOrder()
{
    $db = \Config\Database::connect(); 
    $query = $db->table('booking');
    $currentDate = date('Y-m-d');
$startDate = date('Y-m-01', strtotime('+1 month', strtotime($currentDate)));
$endDate = date('Y-m-t', strtotime('+1 month', strtotime($currentDate)));

 
    $query->select('*, (SELECT name FROM client WHERE id = booking.client_id) AS customer_name ,(SELECT name FROM category WHERE id = booking.func_id) AS f_name');
    $query->where('func_date >=', $startDate)->where('func_date <=', $endDate);
    $result = $query->get()->getResultArray();
    
    return $result; 
}
public function search_data_from_to($from, $to)
{
    $db = \Config\Database::connect();
    $query = $db->table('booking');

    $query->select("*, (SELECT CONCAT(name, '-', number) FROM client WHERE id = booking.client_id) AS customer_name, (SELECT name FROM category WHERE id = booking.func_id) AS f_name");
    $query->where('func_date >=', $from)->where('func_date <=', $to);

    $result = $query->get()->getResultArray();

    return $result;
}

}
?>