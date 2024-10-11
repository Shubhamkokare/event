<?php

namespace App\Controllers;

use App\Models\usersModel;
use App\Models\serviceModel;
use App\Models\categoryModel;
use App\Models\bookModel;
use App\Models\ordersModel;
use App\Models\order_listModel;
use App\Models\clientModel;
use App\Models\accountModel;
use App\Models\billModel;
use App\Models\imgtableModel;
use App\Models\booking_detailsModel;
use App\Models\cartModel;



class Admin extends BaseController
{
    public function __construct()
    {
        $this->usersModel = new usersModel();
        $this->serviceModel = new serviceModel();
        $this->categoryModel = new categoryModel();
        $this->bookModel = new bookModel();
        $this->ordersModel = new ordersModel();
        $this->order_listModel = new order_listModel();
        $this->clientModel = new clientModel();
        $this->accountModel = new accountModel();
        $this->billModel = new billModel();
        $this->imgtableModel = new imgtableModel();
        $this->booking_detailsModel = new booking_detailsModel();
        $this->cartModel = new cartModel();


        $this->session = session();
        if ($this->session->get('token') && $_SESSION['token']) {
            $this->userRow = $this->usersModel->getuser($this->session->get('token'));
        } else {
            return redirect()->to('login');
        }
    }
    public function index(): string
    {
        $data['totalbooking']=$this->bookModel->countAllResults();
        $data['thismonth']=$this->bookModel->where('func_date >=', date('Y-m-d'))->where('func_date <=', date('Y-m-30'))->countAllResults();
       $currentDate = date('Y-m-d');
       $startDate = date('Y-m-01', strtotime('+1 month', strtotime($currentDate)));
       $endDate = date('Y-m-t', strtotime('+1 month', strtotime($currentDate)));

$data['nextmonth'] = $this->bookModel->where('func_date >=', $startDate)->where('func_date <=', $endDate)->countAllResults();
    
    
    

        $data['totalbooking']=$this->bookModel->countAllResults();

        $data['totalcustomer']=$this->clientModel->countAllResults();
        return $this->header("Dashboard") .
            view('home',$data) .
            view('include/footer');
    }
    public function header($title = "")
    {
        $today = date('Y-m-d H:i:s');
        $data['title'] = $title;
        $data['userRow'] = $this->userRow;
        $data['session'] = $this->session;
        return view('include/header', $data);
    }

    public function addservice()
    {
        if (isset($_POST['save'])) {
            $iddate = date('Y-m-d H:m:s');
            $name = $this->request->getPost('name');
            $deis = $this->request->getPost('deis');
            $cost = $this->request->getPost('cost');
            $sub_ser = $this->request->getPost('sub_ser');

            $img_name = "";

            $data =
                [
                    'iddate' => $iddate,
                    'name' => $name,
                    'cost' => $cost,
                    'deis' => $deis,
                    'user' => $this->userRow->id,
                    'img' => $img_name,
                    'sub_ser' => $sub_ser,

                ];
            $this->serviceModel->insert($data);
            $service_id = $this->serviceModel->getInsertID();
            if ($service_id > 0) {
                foreach ($this->request->getFileMultiple('image') as $img) {
                    $img_name = $img->getRandomName();
                    $img->move(ROOTPATH . 'public/uploads/service/', $img_name);
                    $data = [
                        'img_name' => $img_name,
                        'service_id' => $service_id,
                        'cost' => $cost,
                        'sub_ser' => $sub_ser,
                        'name' => $name,

                    ];

                    $this->imgtableModel->insert($data);
                }
            }
            if($service_id>0)
            $this->session->setFlashdata('result','<div class="success_status">Save Successfuly</div>');
            else 
                $this->session->setFlashdata('result','<div class="error_status">Not Save</div>');
            return redirect()->to('addservice');

        } else {
            $data['sub_ser'] = $this->serviceModel->where('sub_ser is null')->findAll();
            return $this->header("service") . view('service/addservice', $data) . view('include/footer');
        }

    }

    public function editservice($id)
    {
        if ($id > 0) {
            if (isset($_POST['save'])) {
                $iddate = date('Y-m-d H:m:s');
                $name = $this->request->getPost('name');
                $deis = $this->request->getPost('deis');
                $cost = $this->request->getPost('cost');
                $img_name = "";
                $img = $this->request->getFile('image');
                $validated = $this->validate([
                    'file' => [
                        'uploaded[file]',
                        'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                        'max_size[file,4096]',
                    ],
                ]);

                if ($validated) {
                    $img_name = $img->getRandomName();
                    $img->move(ROOTPATH . 'public/uploads/service/', $img_name);

                }
                $data =
                [
                    'iddate' => $iddate,
                    'name' => $name,
                    'cost' => $cost,
                    'deis' => $deis,
                    'user' => $this->userRow->id,
                    'img' => $img_name,

                ];
                $this->serviceModel->where('id', $id)->set($data)->Update();
                return redirect()->to('servicelist');
            } else {
                $data['category'] = $this->categoryModel->findAll();

                $data['edit'] = $this->serviceModel->getSingle($id);
                return $this->header("Update service ") .
                view('service/addservice', $data) .
                view('include/footer');

            }
        } else {
            return redirect()->to('servicelist');
        }
    }
    public function servicelist()
    {
        $data['servicelist'] = $this->serviceModel->findimage();
        return $this->header("service List") . view('service/servicelist', $data) . view('include/footer');
    }
    public function deleteservice($id)
    {
        $this->serviceModel->where('id', $id)->Delete();
        return redirect()->to('servicelist');
    }

    public function addcategory()
    {
        if (isset($_POST['save'])) {
            $iddate = date('Y-m-d H:m:s');
            $name = $this->request->getPost('name');

            $status = $this->request->getPost('status');
            $data =
            [
                'iddate' => $iddate,
                'name' => $name,

                'user' => $this->userRow->id

            ];
           if($this->categoryModel->insert($data))
            $this->session->setFlashdata('result','<div class="success_status">Save Successfuly</div>');
            else 
                $this->session->setFlashdata('result','<div class="error_status">Not Save</div>');
            return redirect()->to('addcategory');

        } else {
            $data['categorylist'] = $this->categoryModel->getCategory();

            return $this->header("Add Category") . view('category/addcategory',$data) . view('include/footer');
        }

    }

    public function editcategory($id)
    {
        if ($id > 0) {
            if (isset($_POST['save'])) {
                $iddate = date('Y-m-d H:m:s');
                $name = $this->request->getPost('name');

                $data =
                [
                    'iddate' => $iddate,
                    'name' => $name,

                    'user' => $this->userRow->id

                ];

                if($this->categoryModel->where('id', $id)->set($data)->Update())
                $this->session->setFlashdata('result','<div class="success_status">Update Successfuly</div>');
                else 
                    $this->session->setFlashdata('result','<div class="error_status">Not Udate</div>');                return redirect()->to('addcategory');
            } else {
                $data['categorylist'] = $this->categoryModel->getCategory();

                $data['edit'] = $this->categoryModel->getSingle($id);
                return $this->header("Update Category ") .
                view('category/addcategory', $data) .
                view('include/footer');

            }
        } else {
            return redirect()->to('addcategory');
        }
    }
    public function categorylist()
    {
        $data['categorylist'] = $this->categoryModel->getCategory();
        return $this->header("Category List") . view('category/categorylist', $data) . view('include/footer');
    }
    public function deletecategory($id)
    {
        $this->categoryModel->where('id', $id)->Delete();
        return redirect()->to('categorylist');
    }
    public function showorders()
    {
        $data['orders'] = $this->ordersModel->findAll();
        return $this->header("Orders") . view('orders/orderslist', $data) . view('include/footer');

    }
    public function showtotalorders($id)
    {
        $data['showtotalorders'] = $this->order_listModel->where('order_id', $id)->findAll();
        return $this->header("Total Orders") . view('order_list/orderlist', $data) . view('include/footer');
    }
    // otp 14-1-24


    //15-01-24
    public function fetch_product()
    {

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            echo json_encode(array($this->serviceModel->getSingle($id)));
        } else {
            echo json_encode(['error' => 'Invalid request.']);
        }
    }
    public function client_save()
    {
        if ($this->request->isAJAX()) {
            //$data = $this->request->getPost();
            $name = $this->request->getPost('name');
            $number = $this->request->getPost('number');
            $address = $this->request->getPost('address');
            $iddate=date('Y-m-d H:i:s');
            $data = [
                'iddate'=>$iddate,
                'name' => $name,
                'number' => $number,
                'address' => $address,
                'user' => $this->userRow->id,
            ];

           if($this->clientModel->insert($data))
            $this->session->setFlashdata('result','<div class="success_status">Save Successfuly</div>');
            else 
                $this->session->setFlashdata('result','<div class="error_status">Not Save</div>');
          //  if($this->clientModel->getInsertID()>0)
            //    echo json_encode("Success");
            //else
              //  echo json_encode("Failed");
            
        }

       // return $this->response->setJSON(['error' => 'Invalid request']);
    }
    public function client()
    {
        if (isset($_POST['save'])) {
            $name = $this->request->getPost('name');
            $number = $this->request->getPost('number');
            $address = $this->request->getPost('address');

            $data = [
                'name' => $name,
                'number' => $number,
                'address' => $address,
                'user' => $this->userRow->id,
            ];
           if( $this->clientModel->insert($data))
            $this->session->setFlashdata('result','<div class="success_status">Save Successfuly</div>');
            else 
                $this->session->setFlashdata('result','<div class="error_status">Not Save</div>');
            return redirect()->to('client');
        } else {
            return $this->header("Add client") . view('client/addclient') . view('include/footer');
        }
    }
    public function editclient($id)
    {
        if ($id > 0) {
            if (isset($_POST['save'])) {
                $name = $this->request->getPost('name');
                $number = $this->request->getPost('number');
                $address = $this->request->getPost('address');

                $data = [
                    'name' => $name,
                    'number' => $number,
                    'address' => $address,
                ];

                if($this->clientModel->where('id', $id)->set($data)->Update())
                $this->session->setFlashdata('result','<div class="success_status">Save Successfuly</div>');
                else 
                    $this->session->setFlashdata('result','<div class="error_status">Not Save</div>');
                return redirect()->to('clientlist');
            } else {
                $data['edit'] = $this->clientModel->getSingle($id);
                return $this->header("Update client ") .
                view('client/addclient', $data) .
                view('include/footer');

            }
        } else {
            return redirect()->to('clientlist');
        }
    }
    public function clientlist()
    {
        $data['clientlist'] = $this->clientModel->findAll();
        return $this->header("client List") . view('client/clientlist', $data) . view('include/footer');
    }
    public function deleteclient($id)
    {
        $this->clientModel->where('id', $id)->Delete();
        return redirect()->to('clientlist');
    }
   /* public function book()
    {
        if (isset($_POST['save'])) {
            {
                $sum=0;
                $total_amount=0;           
                foreach ($_POST['ser_id'] as $ser_id) {
                  $cost = $this->request->getPost('cost' . $ser_id);
                  $qty = $this->request->getPost('qty' . $ser_id);
                  $total_amount=floatval($qty) * floatval($cost);
                  $date = $this->request->getPost('date');
                 $sum=$sum+$total_amount;
                  
              }
                $iddate=date('Y-d-m H:m:s');
                $customer_id = $this->request->getPost('client');
                $address = $this->request->getPost('address');
                $date = $this->request->getPost('func_date');
                $remark = $this->request->getPost('remark');
                $function = $this->request->getPost('function');

                    $data=
                    [
                        'client_id'=>$customer_id,
                        'iddate'=>$iddate,
                        'func_date'=>$date,
                        'address'=>$address,
                        'remark'=>$remark,
                        'func_id'=>$function,
                        'by_userid'=>$this->userRow->id,
                        'total'=>$total_amount,
                        'all_total'=>$sum,
                    ];
                    $this->bookModel->insert($data);  
                    $book_id=$this->bookModel->getInsertID();
                    if($book_id)
                    {
                       $data=[
                        'bill_no'=> $book_id,
                        'customer_id'=>$customer_id,
                        'total'=>$sum

                       ];
                       $this->accountModel->insert($data);
                    }        
                  foreach ($_POST['ser_id'] as $ser_id) {
                    $cost = $this->request->getPost('cost' . $ser_id);
                    $qty = $this->request->getPost('qty' . $ser_id);
                    $total_amount=floatval($qty) * floatval($cost);
                    $customer_id = $this->request->getPost('client');
                    $date = $this->request->getPost('date');
                    $stats='new';
                    $data = [
                        'service_id' => $ser_id,
                        'rate' => $cost,
                        'qty' => $qty,
                        'total' => $total_amount,
                        'book_id'=>$book_id,
                         'iddate'=>$iddate,
                         'status'=>$stats,
                         'customer_id'=>$customer_id

                    ];
                     $this->booking_detailsModel->insert($data);
                    return redirect()->to('book');
                } 


        
    }
        } else {
            $data['client'] = $this->clientModel->findAll();
            $data['function'] = $this->categoryModel->findAll();
            $data['service'] = $this->serviceModel->findAll();
            return $this->header('BOOK') . view('book/addbook', $data).view('include/footer');

        }
    }
*/
public function book()
{
    if (isset($_POST['save'])) 
    {
        
          
            $iddate=date('Y-d-m H:m:s');
            $customer_id = $this->request->getPost('client');
            $address = $this->request->getPost('address');
            $date = $this->request->getPost('func_date');
            $remark = $this->request->getPost('remark');
            $function = $this->request->getPost('function');

                $data=
                [
                    'client_id'=>$customer_id,
                    'iddate'=>$iddate,
                    'func_date'=>$date,
                    'address'=>$address,
                    'remark'=>$remark,
                    'func_id'=>$function,
                    'by_userid'=>$this->userRow->id,
                ];
                $this->bookModel->insert($data);  
                $data['book_id']=$this->bookModel->getInsertID();
                $data['service']=$this->serviceModel->getImg();

                return redirect()->to("services/".$data['book_id']);
            
        }  
        else {
            $data['client'] = $this->clientModel->findAll();
            $data['function'] = $this->categoryModel->findAll();
            $data['service'] = $this->serviceModel->findAll();
            return $this->header('BOOK') . view('book/addbook', $data).view('include/footer');
        }
}
public function services($id)
{ 
    $data['booking_id'] =$id;
     $data['sub_serviceList'] = $this->serviceModel->getMain_service();
      $data['sub_serviceList1'] = $this->serviceModel->demoimg();
      $data['service'] = $this->serviceModel->where('sub_ser=0 OR sub_ser is null')->findAll();
      $data['serviceModel'] = $this->serviceModel;

    return $this->header('Select Service').view('book/services',$data).view('include/footer');
}
public function services_list($id)
{ 
      $data['services_list'] = $this->cartModel->getService_list($id);
     $data['bill_details']=$this->bookModel->getBillDetilsByid($id);
     $data['cartModel'] = $this->cartModel;
     $data['all_services_list'] = $this->serviceModel->where('sub_ser is null')->findAll();

    return $this->header('Quotation No : '.$id).view('book/bill',$data).view('include/footer');
}
public function deleteorder($id,$booking_id)
{ 
$this->cartModel->delete($id);
return redirect()->to("services_list/".$booking_id);    
}

public function sub_services($service_id,$booking_id)
{ 
      $data['sub_serviceList'] = $this->serviceModel->getSub_service($service_id);
      $data['serviceModel'] = $this->serviceModel;
      //, (SELECT img_name FROM image WHERE service_id = service.id) as img
      $data['booking_id']=$booking_id;

     
    return $this->header(' Sub Service').view('book/sub_service',$data).view('include/footer');
}
public function editorderlist($id=0)
{
if($id>0)
{
    if(isset($_POST['save']))
    {
        for($i=0;$i<sizeof($_POST['qty']) ;$i++)
        {
            $qty=$_POST['qty'][$i];
            if($qty){
                $remark=$_POST['remark'][$i];

                    $service_id=$_POST['item_id'][$i];
                    $rate=$_POST['rate'][$i];
                    $ids=$_POST['id'][$i];

                    $data=[
                        'service_id'=>$service_id,
                        'rate'=>$rate,
                        'qty'=>$qty,
                        'remark'=>$remark,

                    ];
                    $this->cartModel->where('id',$ids)->set($data)->update();
        }
        }
        return redirect()->to("editorderlist/".$id);

    }
    else
    {
        $data['serviceModel'] = $this->serviceModel;
        $data['book_id']=$id;
        $data['edit']=$this->cartModel->getCartDataById($id);
        return $this->header('Update').view('book/updateBookingList',$data).view('include/footer');
    }
}
}
public function deleteorderBookig($id,$booking_id)
{
 $this->cartModel->where('id',$id)->delete();
 return redirect()->to("editorderlist/".$booking_id);
}
public function save_serice()
{ 
    
            
            $booking_id=$this->request->getPost('booking_id');

            for($i=0;$i<sizeof($_POST['qty']) ;$i++)
            {
                $qty=$_POST['qty'][$i];
                if($qty){
                    $remark=$_POST['remark'][$i];

                        $service_id=$_POST['item_id'][$i];
                        $rate=$_POST['rate'][$i];
                        $data=[
                            'service_id'=>$service_id,
                            'booking_id'=>$booking_id,
                            'rate'=>$rate,
                            'qty'=>$qty,
                            'remark'=>$remark,

                        ];

                        $this->cartModel->insert($data);
            }
            }
            if($booking_id>0)
            $this->session->setFlashdata('result','<div class="success_status">Save Successfuly</div>');
            else 
                $this->session->setFlashdata('result','<div class="error_status">Not Save</div>');
            return redirect()->to("services/$booking_id");
       
     
}
public function Search()
{
    $from =$this->request->getPost('from_date');
    $to =$this->request->getPost('To_date');

    $data['bookinglist']=$this->bookModel->search_data_from_to($from,$to);
    return $this->header('Booking List').view('book/bookinglist',$data).view('include/footer');
}
public function bokinglist()
{
    $data['bookinglist']=$this->bookModel->findcustname();
    return $this->header('Booking List').view('book/bookinglist',$data).view('include/footer');
}
public function customerorderlist($id)
{
    $data['bookinglist']=$this->bookModel->getAllByCustomerId($id);
    return $this->header('Customer Booking List').view('book/bookinglist',$data).view('include/footer');
}
public function updatestatus($id=0)
{  
    if (isset($_POST['save'])) {
        $ids = $this->request->getPost('id');
        
        foreach ($ids as $id) {
            $iddate = date('d-m-y H:m:s');
            $remark = $this->request->getPost('remark_'.$id);
            $status = $this->request->getPost('status_'.$id);
            
            $data = [
                'status' => $status,
                'remark' => $remark,
                'lastupdate' => $iddate,
            ];
        $this->booking_detailsModel->where('id',$id)->set($data)->update();
        return redirect()->to('bokinglist');

    }
    }
    else{
        $data['bookingordelist']=$this->booking_detailsModel->findtotal($id);
        return $this->header('Booking List').view('book/bookingorderlist',$data).view('include/footer');
    
}
}

public function deletebookingorder($id)
{
    $this->bookModel->where('id', $id)->Delete();
}
public function orderlist($id=0)
{
    
    if (isset($_POST['save'])) {
    $ids = $this->request->getPost('id');
    
    foreach ($ids as $id) {
        $iddate = date('d-m-y H:m:s');
        $remark = $this->request->getPost('remark_'.$id);
        $status = $this->request->getPost('status_'.$id);
        
        $data = [
            'status' => $status,
            'remark' => $remark,
            'lastupdate' => $iddate,
        ];
    $this->booking_detailsModel->where('id',$id)->set($data)->update();
    return redirect()->to('orderlist');

}
}
else{
    $data['bookingordelist']=$this->booking_detailsModel->findtotal($id);
    return $this->header('Booking List').view('book/bookingorderlist',$data).view('include/footer');
}
    }
public function list($id)
{  $data['boking_details'] = $this->bookModel->getSingle($id);
      $data['customer_details'] = $this->clientModel->getSingle($data['boking_details']->client_id);
      $data['bookingordelist'] = $this->booking_detailsModel->findtotal($id);
     
    return $this->header('Booking List').view('book/list',$data).view('include/footer');
}
public function logout()
    {
        $this->session->remove('token');

        return redirect()->to('Home/index');

    }
    public function imageall($id)
{
    $data['images'] = $this->imgtableModel->showimage($id);
    echo json_encode($data);
}
public function this_month_order()
{
    $data['bookinglist']=$this->bookModel->getTisMonthOrder();
  return $this->header("this Month Order").view('book/bookinglist',$data).view('include/footer');
}
public function next_month_order()
{
    $data['bookinglist']=$this->bookModel->getNextMonthOrder();
  return $this->header("Next Month Order").view('book/bookinglist',$data).view('include/footer');
}

}
