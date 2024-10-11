<?php

namespace App\Controllers;
use App\Models\usersModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->usersModel= new usersModel();
        $this->session = session();
    }
   
    public function index(): string
    {
        return     view('signin');
       
    }
    public function login()
    {
        if(isset($_POST['loginbnt']))
        {
            $name=$this->request->getPost('name');
            $password=$this->request->getPost('password');
            $row=$this->usersModel->isvalidate($name,$password);
            if($row){
            $token=md5($row->id);
            $this->usersModel->set_user_token($token,$row->id);
            $this->session->set('token',$token);
            return redirect()->redirect("Admin");
            }
            else{
                return redirect()->to("Home");
            }
        }
    }
   
}
 ?>  
