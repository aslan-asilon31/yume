<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        return view('visitor.index');
    }

    public function order()
    {
        return view('visitor.order.index');
    }

    
    public function product()
    {
        return view('visitor.product.index');
    }
}
