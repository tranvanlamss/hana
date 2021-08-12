<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission');
    }
    public function index(){
        return view('admin.menu.index');
    }

    public function create()
    {
        return view('admin.menu.add');
    }

    public function store()
    {   
        
    }

    public function edit(){

    }

    public function delete(){

    }
}
