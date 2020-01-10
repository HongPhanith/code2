<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use \App\Customer;
use \App\Company;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class CustomersController extends Controller
{

    //we do not want people to do anything except they can see index and show full page. 
    //guest cannot edit or delete. 
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        //i want to paginate. so I changed from
        // $customers = Customer::all();
        //changed to:
        $customers = Customer::with('company')->paginate(4);

        return view('customers.index', compact('customers'));
    }


    public function create()
    {
        $companies = Company::all();
        $customer = new Customer();

        return view('customers.create', compact('companies', 'customer'));
    }


    public function store()
    {
        Customer::create($this->validateRequest());

        // Mail::to($customer->email)->send(new WelcomeMail());

        return redirect('customers');
    }

    public function show(Customer $customer)
    {
            return view('customers.show', compact('customer'));

    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));
    }

    public function update(Customer $customer)
    {
        $customer->update($this->validateRequest());
        return redirect('customers/' . $customer->id);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('customers');
    }



    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);
    }

}
