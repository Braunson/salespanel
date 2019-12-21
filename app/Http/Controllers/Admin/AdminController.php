<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Delivery;

class AdminController extends Controller
{
    public function index()
    {
        $totalDeliveries = Delivery::total();

        return view('dashboard', compact('totalDeliveries'));
    }
}
