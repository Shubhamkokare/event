<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function sendOtp()
    {

        // Generate and send OTP to the user's mobile number
        // You can use external libraries or APIs for OTP generation and sending

        // For demonstration purposes, we'll generate a random 6-digit OTP
        $otp = rand(100000, 999999);

        // Store the OTP in the session for verification later
       session()->set('otp', $otp);

        // Send OTP to the user's mobile number (implement your logic here)

       // echo json_encode(['status' => true, 'message' => 'OTP sent successfully']);
    }

    public function verifyOtp()
    {
        // Get the OTP entered by the user
        $userOtp = $this->request->getPost('otp');

        // Get the stored OTP from the session
        $storedOtp = session()->get('otp');

        if ($userOtp == $storedOtp) {
            // OTP is valid, perform login or other actions
            echo json_encode(['status' => true, 'message' => 'OTP verified successfully']);
        } else {
            // Invalid OTP
            echo json_encode(['status' => false, 'message' => 'Invalid OTP']);
        }
    }
}
