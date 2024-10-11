<?php

namespace App\Controllers;

class FetchProduct extends BaseController
{
    public function index()
    {
        
        include("db.php");
        
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $sql = "SELECT * FROM product WHERE id = $id";
            $query = mysqli_query($conn, $sql);
        
            if ($query) {
                $row = mysqli_fetch_assoc($query);
                echo json_encode(['price' => $row['price']]);
            } else {
                echo json_encode(['error' => 'Failed to fetch product price.']);
            }
        } else {
            echo json_encode(['error' => 'Invalid request.']);
        }
        
        
    }
}
