<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;

    }

    public function index()
    {
        $customer = $this->customer->all();
        return view('customer.list', compact('customer'));
    }

    public function formAdd()
    {
        return view('customer.formAdd');
    }

    public function add(Request $request)
    {
//        $customer = $this->customer->all();
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->save();
        return redirect()->route("customer.index");


    }

    public function delete($id)
    {
        $customer = $this->customer->findOrFail($id);
        $customer->delete();
        return redirect()->route("customer.index");
    }
    public function edit($id){
        $customer = $this->customer->findOrFail($id);
        return view('customer.formEdit',compact('customer'));
    }

    public function update(Request $request,$id){
        $customer = $this->customer->findOrFail($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->save();
         return redirect()->route("customer.index");
    }
}
