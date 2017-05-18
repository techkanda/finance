<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use Auth;

class TypeController extends Controller
{


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
         $types = Type::all();

        return view('admin.types.index',compact('types'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $type = Type::count();

         return view('admin.types.create', compact('type'));
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
        'mode_id' => 'required',
        'mode_name' => 'required',
        ]);
        $type = new Type;
        $type->mode_id = $request->mode_id;
        $type->mode_name = $request->mode_name;
        $type->created_by = Auth::user()->name;
        $type->save();
        return redirect('admin/types')->with('success', 'insert successfull');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type = Type::find($id);
          return view('admin.types.show',compact('type')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $type = Type::find($id);

        return view('admin.types.edit', compact('type'));  
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
        'mode_id' => 'required' ,
        'mode_name' => 'required',
        ]);
          $type = Type::find($id)->update($request->all());

        return redirect()->route('types.index')
                        ->with('success','mode updated successfully');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $type = Type::find($id)->delete();

        return redirect()->route('types.index')
                        ->with('success','Mode deleted successfully');  
    }
}
