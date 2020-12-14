<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = User::where('role', 'customer')->paginate(6);
        return view('admin.customers.index')->withCustomers($customers);
    }

    public function show(User $customer)
    {
        return view('admin.customers.show')->withCustomer($customer);
    }

    public function destroy(User $customer)
    {
        //
    }
}
