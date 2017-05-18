<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use Auth;


class AreaController extends Controller
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
         $areas = Area::all();

        return view('admin.areas.index',compact('areas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $area = Area::count();

         return view('admin.areas.create', compact('area'));
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
        'area_name' => 'required' ,
        'area_district' => 'required',
        'area_state' =>'required',
        ]);
       
        $area = new Area;
        $area->area_id = $request->area_id;
        $area->area_name = $request->area_name;
        $imageName = time().'.'.$request->area_pic->getClientOriginalExtension();
        $path = $request->area_pic->move('area_pic', $imageName);
        $area->area_pic = $path;
        $area->area_district = $request->area_district;
        $area->area_state = $request->area_state;
        $area->created_by = Auth::user()->name;
        $area->save();
        return redirect('admin/areas')->with('success','inserted Sucessfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $area =Area::find($id);
        return view ('admin.areas.show',compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $area = Area::find($id);

        return view('admin.areas.edit', compact('area'));  
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
        'area_name' => 'required' ,
        'area_district' => 'required',
        'area_state' =>'required',
        ]);

          $area=Area::find($id)->update($request->all());
           return redirect('admin/areas')->with('success','updated Sucessfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $area = Area::find($id)->delete();

         return redirect('admin/areas')->with('success','Deleted Sucessfull');
    }
}
