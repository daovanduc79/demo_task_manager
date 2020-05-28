<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->customer_number = $request->customer_number;
        $customer->name = $request->name;
        $customer->birthday = $request->birthday;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        if ($request->hasFile('inputFile')) {
            $file = $request->inputFile;
            $path = $file->store('images','public');
            $customer->image = $path;
        } else {
            $customer->image = 'images/default.jpg';
        }

        $customer->save();
        $message = 'them moi thanh cong !!';
        session()->flash('create-success', $message);
        return redirect()->route('customers.list', compact('message'));
    }

    public function delete($id)
    {
        $customer = $this->customer->findOrFail($id);
        $currentAvatar = $customer->image;
        //xoa file cu di truoc
        Storage::delete('public/'. $currentAvatar);
        $customer->delete();
        return redirect()->route('customers.list');
    }

    public function edit($id)
    {
        $customer = $this->customer->findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update($id, Request $request)
    {
        $customer = $this->customer->findOrFail($id);
        $customer->customer_number = $request->customer_number;
        $customer->name = $request->name;
        $customer->birthday = $request->birthday;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        if ($request->hasFile('inputFile')) {
            $file = $request->inputFile;
            $currentAvatar = $customer->image;
            //xoa file cu di truoc
            Storage::delete('public/'. $currentAvatar);
            $path = $file->store('images', 'public');
            $customer->image = $path;
        }
        $customer->save();
        $message = 'cap nhat thanh cong !!!';
        session()->flash('update-success', $message);
        return redirect()->route('customers.list');

    }
}
