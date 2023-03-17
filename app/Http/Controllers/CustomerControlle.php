<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerControlle extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::orderBy('id', 'desc')->get();
        return response()->json($customers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new Customer;

        $customer->firstName = $request->firstName;
        $customer->lastName = $request->lastName;
        $customer->email = $request->email;

        $customer->save();

        return response()->json($customer);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);
        return response()->json($customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, Request $request)
    {   
        $customer = Custumer::findOrFail($id);

        $customer->firstName = $request->firstName;
        $customer->lastName = $request->lastName;
        $customer->email = $request->email;

        $customer->save();

        return response()->json($customer); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return response()->json($customer);
    }
}
