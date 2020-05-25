<?php

namespace App\Http\Controllers;

use App\Customer;

class CustomerController extends Controller
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function getAll()
    {
        $customers = $this->customer->all();
        return view('customers.list', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

}
