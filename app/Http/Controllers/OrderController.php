<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    /**
     * OrderController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return OrderResource::collection(Order::all());
    }
}
