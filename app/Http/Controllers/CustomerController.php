<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Auth;

class CustomerController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $customers = Customer::all();

        return view('admin.customers.index',compact('customers'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $customer = Customer::count();

         return view('admin.customers.create', compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
        'cus_name' => 'required' ,
        'phone' => 'required|numeric|min:10',
        'address' =>'required',
        'area_id'=>'required',
        'proof'=>'required',
        'proof_id' =>'required',

        ]);
        $customer = new Customer;
        $customer->cus_id =$request->cus_id;
        $customer->cus_name = $request->cus_name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->area_id = $request->area_id;
        $customer->proof = $request->proof;
        $customer->proof_id = $request->proof_id;
        $imageName = time().'.'.$request->proof_doc->getClientOriginalExtension();
        $path = $request->proof_doc->move('customers_docs', $imageName);
        $customer->proof_doc = $path;
        $customer->guarantor_name = $request->guarantor_name;
        $customer->guarantor_address = $request->guarantor_address;
        $customer->created_by = Auth::user()->name;
        $customer->save();

           return redirect('admin/customers')->with('success', 'insert success full');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
          return view('admin.customers.show',compact('customer'));   

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $customer = Customer::find($id);

        return view('admin.customers.edit', compact('customer'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $this->validate($request,[
                        'cus_name' => 'required' ,
                        'phone' => 'required',
                        'address' =>'required',
                        'area_id'=>'required',
                        'proof'=>'required',
                        'proof_id' =>'required',
        ]);

        $customer = Customer::find($id)->update($request->all());

        return redirect('admin/customers')->with('success','Customer updated successfully');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $customer = customer::find($id)->delete();

         return redirect('admin/customers')->with('success','Deleted Sucessfull');
    }
}
