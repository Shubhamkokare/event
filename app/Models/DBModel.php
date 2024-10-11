<?php
namespace AppModels;

use CodeIgniter\Model;

class DBModel extends Model
{
    protected $table = 'login';
    protected $primaryKey = 'user_id';
    
    protected $useAutoIncrement = true;
    
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    
    protected $allowedFields = ['user_name','user_email','user_password'];

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    
   
}