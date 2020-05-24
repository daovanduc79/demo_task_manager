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
        return view('customer.list', compact('customers'));
    }
}
