<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function homepage()
    {
        return view("InputData"); // Renders the input form view
    }

    public function displayData()
    {
        // Retrieve form data using POST
        $data = [
            'student_id' => $this->request->getPost('student_id'),
            'fname' => $this->request->getPost('fname'),
            'lname' => $this->request->getPost('lname'),
            'address' => $this->request->getPost('address'),
            'birthday' => $this->request->getPost('birthday'),
            'gender' => $this->request->getPost('gender'),
            'mobile' => $this->request->getPost('mobile'),
            'email' => $this->request->getPost('email'),
            'status' => $this->request->getPost('status')
        ];

        return view('DisplayData', $data); // Pass data to DisplayData view
    }
}
