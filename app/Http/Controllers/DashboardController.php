<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

use App\Contact;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __invoke()
    {
    	$id = Contact::all('id'); 
        return Inertia::render('Dashboard/Index');
    }


}
