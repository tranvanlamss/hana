<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission');
    }
     public function index(){
        return view('admin.bill.index');
    }

    public function create()
    {
        return view('admin.bill.add');
    }

    public function store()
    {   
        
    }

    public function edit(){

    }

    public function delete(){

    }
}
