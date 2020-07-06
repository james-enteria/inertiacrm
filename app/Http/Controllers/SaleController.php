<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    public function index()
    {
    	return Inertia::render('Sales/Index', [
    		'sales'=> 
    			
    			'id', 'product_name', 'price', 'amount', 'contact_id'

    	]);
    }
}
