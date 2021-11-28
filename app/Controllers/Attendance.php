<?php


namespace App\Controllers;


use CodeIgniter\Controller;

class Attendance extends BaseController
{
    public function index(){
        return view('attendance/data');
    }
}