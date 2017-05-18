<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;
use Validator;
use Session;

class UserController extends Controller
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
        $users = User::all();

        return view('admin.users.index', compact('users'));
        //return 'Users';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $this->validate($request, [
            'fname'       => 'required',
            'lname'       => 'required',            
            'email'       => 'required|email|unique:users',
            'username'    => 'required|unique:users',
            'date'         => 'required|date',
            'password'    => 'required',
            'address'     => 'required',
            ]);

            $user = new User;
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->password = bcrypt('$request->password');
            $user->dob = $request->date;
            $user->address = $request->address;
            $user->save();

            // redirect
            return redirect('admin/users')
                        ->with('success', env('SUCCESS_MESSAGE'));
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::find($id);
        return view('admin.users.show',compact('user')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);

        return view('admin.users.edit', compact('user'));
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
        //
        $this->validate($request, [
            'fname'       => 'required',
            'lname'       => 'required',            
            'email'       => 'required|email',
            'username'    => 'required',
            'date'         => 'required|date',  
            'address'     => 'required',
        ]);

        $user = User::find($id);
        $user->fname  = $request->fname;
        $user->lname   = $request->lname;
        $user->address   = $request->address;
        $user->email   = $request->email;
        $user->username   = $request->username;
        $user->dob   = $request->date;
        $user->save();

        return redirect()->route('users.index')
                        ->with('success','User data updated successfully');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id)->delete();

        return redirect()->route('admin.users.index')
                        ->with('success','User deleted successfully');        
    }
}
