<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use Auth;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
         $partners=Partner::all();
        return view('admin.partners.index',compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partner=Partner::count();
        return view('admin.partners.create',compact('partner'));
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
        'partner_name' => 'required' ,
        'phone' => 'required|numeric|min:10',
        'address' =>'required',
        'area'=>'required',
        'proof_type'=>'required',
        'proof_id' =>'required',
        'Partner_Amount' =>'required',
        ]);
        $partner=new Partner;
        $partner->partner_id = $request->partner_id;
        $partner->partner_name = $request->partner_name;
        $partner->phone = $request->phone;
        $partner->address = $request->address;
        $partner->area = $request->area;
        $partner->proof_type = $request->proof_type;
        $partner->proof_id = $request->proof_id;
        $imageName = time().'.'.$request->proof_doc->getClientOriginalExtension();
        $path = $request->proof_doc->move('partner_docs', $imageName);
        $partner->proof_doc = $path;
        $partner->guarantor_name = $request->guarantor_name;
        $partner->guarantor_address = $request->guarantor_address;
        $partner->Partner_Amount = $request->Partner_Amount;
         $partner->created_by = Auth::user()->name;
        $partner->save();
          return redirect('admin/partners')->with('success', 'insert success full');
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $partner = Partner::find($id);
          return view('admin.partners.show',compact('partner'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::find($id);

        return view('admin.partners.edit', compact('partner'));  
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
        'partner_name' => 'required' ,
        'phone' => 'required|numeric|min:10',
        'address' =>'required',
        'area'=>'required',
        'proof_type'=>'required',
        'proof_id' =>'required',
        'Partner_Amount' =>'required',
        ]);

        $partner = Partner::find($id)->update($request->all());

         return redirect('admin/partners')->with('success','Update sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id)->delete();

       return redirect('admin/partners')->with('success','Deleted sucessfully');
    }
}
